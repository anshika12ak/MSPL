<?php
/**
 * Blog banner generator (CLI only).
 * Usage:  php -d extension=gd tools/blog-banners/generate.php [slug]
 * Reads banners.txt, writes assets/image/blog-banners/<slug>.jpg (1920x600).
 *
 * Every banner gets its own look: 6 layouts x 13 palettes are combined by the
 * line position in banners.txt (unique pair for up to 78 blogs), and all the
 * decorative details are randomised from the slug.
 */
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }

$root = dirname(__DIR__, 2);
include $root . '/blogs-data.php';
$cats = [];
foreach ($blogs as $b) { $cats[preg_replace('/\.php$/', '', $b['link'])] = $b['category']; }

const S = 2;                 // supersampling factor
const W = 1920, H = 600;
$FONT_BLACK = 'C:/Windows/Fonts/seguibl.ttf';
$FONT_BOLD  = 'C:/Windows/Fonts/segoeuib.ttf';
$FONT_SEMI  = 'C:/Windows/Fonts/seguisb.ttf';
$FONT_ICON  = 'C:/Windows/Fonts/SegoeIcons.ttf';

$ICONS = [
    'gear'=>'E713','cloud'=>'E753','team'=>'E716','code'=>'E943','chart'=>'E9D2','lock'=>'E72E','search'=>'E721',
    'globe'=>'E774','chat'=>'E8BD','calc'=>'E8EF','check'=>'E73E','laptop'=>'E7F8','phone'=>'E8EA','bolt'=>'E945',
    'sync'=>'E895','user'=>'E77B','key'=>'E8D7','warn'=>'E7BA','doc'=>'E8A5','chats'=>'E8F2','wrench'=>'E90F',
    'list'=>'E71D','calendar'=>'E787','heart'=>'EB51','star'=>'E734','home'=>'E80F','link'=>'E71B','pulse'=>'E9D9',
    'layers'=>'E81E','pin'=>'E707','share'=>'E72D','speed'=>'EC4A','mic'=>'E720','flag'=>'E7C1','report'=>'E9F9',
    'percent'=>'E94C','puzzle'=>'EA86','archive'=>'E7B8','world'=>'E909','broadcast'=>'EC05','gears'=>'E9F5',
    'card'=>'E8C7','history'=>'E81C','idea'=>'EA80','swap'=>'E8AB','server'=>'E8CE','checkc'=>'E930',
    'palette'=>'E790','monitor'=>'E7F4','pen'=>'E70F','shield'=>'EA18','pie'=>'EB05','migrate'=>'E9A1',
    'like'=>'E8E1','network'=>'EBD2',
];
// keyword -> icon for feature items (first match wins)
$KEYMAP = [
    'fewer|eliminat|reduce|lower|minimal|zero'=>'checkc', 'secur|cyber|authentic|safe'=>'shield', 'migrat'=>'migrate', 'cloud'=>'cloud', 'voice|conversational'=>'mic',
    'test|qa\b|bug|quality|validat|accurate'=>'checkc', 'speed|fast|loading|vitals'=>'speed',
    'api|integrat|connect|sync|link'=>'link', 'local|nearby|google business|route|citation|delhi'=>'pin',
    'social|engag|influenc|community|hashtag|review'=>'like', 'ads\b|campaign|ppc|advertis|pay-per|broad'=>'broadcast',
    '\bai\b|ai-|smart|machine|predict|chatbot|intellig'=>'idea', 'seo|search|keyword|snippet|index|schema|rank'=>'search',
    '\bmobile|\bios\b|android|\bapps?\b|app-like|\bpush|offline|5g|ar/vr'=>'phone', 'design|ui/ux|visual|brand|story|culture|ux'=>'palette',
    'automat|workflow|process|dispatch|task'=>'gears', 'inventory|stock|order|shipment|deliver|reorder|supply|fleet'=>'archive',
    'cost|price|pricing|budget|saving|revenue|roi|transaction|payroll|finance|accounting|crore|sales'=>'card',
    'report|analytic|insight|track|metric|monitor|result|visibility|dashboard|pipeline|conversion'=>'chart',
    'growth|scal|agil|advantage'=>'pie', 'support|assist|communication|team|collaborat|expert'=>'chats',
    'maintenance|update|repair|breakdown|fix'=>'wrench', 'customer|user|client|people|buyer|supplier|vendor|lead|hr\b|loyal'=>'team',
    'data|record|server|network|infrastructure|hosting'=>'server', 'plan|requirement|scope|calendar|posting'=>'calendar',
    'content|document|blog|email'=>'doc', 'problem|error|unclear|weak|poor|slow|missing|outdated|hidden|confusing|disconnected|creep|repetitive|manual'=>'warn',
    'code|software|develop|stack|tech|web|site|cms|custom|enterprise|module|portal'=>'code',
    'experience|portfolio|proven|star'=>'star',
];
// primary, secondary(lighter), dark, tint
$PALETTES = [
    ['#1E5EFF', '#3FA9FF', '#0B1F5C', '#EAF2FF'], // royal blue
    ['#6D3FF2', '#B26BFF', '#22104F', '#F2ECFF'], // violet
    ['#0284C7', '#22D3EE', '#082F49', '#E5F7FD'], // cyan
    ['#D9267A', '#FF7AB6', '#4A0D2E', '#FFEDF5'], // magenta
    ['#EA580C', '#FDBA4D', '#431407', '#FFF3E8'], // orange
    ['#15803D', '#34D399', '#052E16', '#E9FAF0'], // green
    ['#4F46E5', '#8B7CFF', '#1E1B4B', '#EEEEFF'], // indigo
    ['#E1306C', '#FF8A5C', '#4A0D24', '#FFEEF3'], // coral rose
    ['#0F766E', '#2DD4BF', '#042F2E', '#E6F8F5'], // teal
    ['#B45309', '#F59E0B', '#3B1D04', '#FFF7E6'], // amber
    ['#1E3A8A', '#38BDF8', '#0B1533', '#EAF1FB'], // navy sky
    ['#9333EA', '#F472B6', '#2E0B4A', '#F7EEFF'], // purple pink
    ['#DC2626', '#FB923C', '#450A0A', '#FEF0EE'], // red
];
$LAYOUTS = ['cards', 'orbit', 'neon', 'vivid', 'mockup', 'bands'];

/* ---------------------------------------------------------------- helpers */
function rgb($hex) { $h = ltrim($hex, '#'); return [hexdec(substr($h,0,2)), hexdec(substr($h,2,2)), hexdec(substr($h,4,2))]; }
function mix($a, $b, $t) { return [(int)round($a[0]+($b[0]-$a[0])*$t), (int)round($a[1]+($b[1]-$a[1])*$t), (int)round($a[2]+($b[2]-$a[2])*$t)]; }
function col($im, $c, $alpha = 0) { return imagecolorallocatealpha($im, $c[0], $c[1], $c[2], max(0, min(127, (int)$alpha))); }
function s($v) { return (int)round($v * S); }
function rnd($a, $b) { return $a + (mt_rand() / mt_getrandmax()) * ($b - $a); }
const WHITE = [255, 255, 255];

/** rounded rect without overlapping pieces (safe for translucent colours); coords already scaled */
function rrect($im, $x, $y, $w, $h, $r, $color) {
    $x = (int)$x; $y = (int)$y; $w = (int)$w; $h = (int)$h;
    $r = (int)min($r, $w/2, $h/2);
    imagefilledrectangle($im, $x, $y+$r, $x+$w-1, $y+$h-$r-1, $color);
    if ($w-2*$r > 0) {
        imagefilledrectangle($im, $x+$r, $y, $x+$w-$r-1, $y+$r-1, $color);
        imagefilledrectangle($im, $x+$r, $y+$h-$r, $x+$w-$r-1, $y+$h-1, $color);
    }
    if ($r < 1) return;
    $d = 2*$r;
    imagefilledarc($im, $x+$r, $y+$r, $d, $d, 180, 270, $color, IMG_ARC_PIE);
    imagefilledarc($im, $x+$w-$r-1, $y+$r, $d, $d, 270, 360, $color, IMG_ARC_PIE);
    imagefilledarc($im, $x+$r, $y+$h-$r-1, $d, $d, 90, 180, $color, IMG_ARC_PIE);
    imagefilledarc($im, $x+$w-$r-1, $y+$h-$r-1, $d, $d, 0, 90, $color, IMG_ARC_PIE);
}
/** gradient rounded rect (horizontal), scaled coords */
function grrect($im, $x, $y, $w, $h, $r, $c1, $c2, $gloss = true) {
    $x = (int)$x; $y = (int)$y; $w = (int)$w; $h = (int)$h;
    $t = imagecreatetruecolor($w, $h);
    imagealphablending($t, false); imagesavealpha($t, true);
    for ($i = 0; $i < $w; $i++) imageline($t, $i, 0, $i, $h-1, col($t, mix($c1, $c2, $i / max(1, $w-1))));
    if ($gloss) {
        imagealphablending($t, true);
        for ($j = 0; $j < (int)($h*0.45); $j++)
            imageline($t, 0, $j, $w-1, $j, imagecolorallocatealpha($t, 255, 255, 255, (int)(110 + 17*$j/($h*0.45))));
        imagealphablending($t, false);
    }
    $clear = imagecolorallocatealpha($t, 0, 0, 0, 127);
    $r = (int)min($r, $w/2, $h/2);
    foreach ([[$r, $r, 0, 0], [$w-$r-1, $r, $w-$r, 0], [$r, $h-$r-1, 0, $h-$r], [$w-$r-1, $h-$r-1, $w-$r, $h-$r]] as [$cx, $cy, $sx, $sy])
        for ($yy = $sy; $yy < $sy+$r; $yy++) for ($xx = $sx; $xx < $sx+$r; $xx++)
            if (($xx-$cx)**2 + ($yy-$cy)**2 > $r*$r) imagesetpixel($t, $xx, $yy, $clear);
    imagecopyresampled($im, $t, $x, $y, 0, 0, $w, $h, $w, $h);
    imagedestroy($t);
}
function gcircle($im, $cx, $cy, $d, $c1, $c2) { grrect($im, $cx - $d/2, $cy - $d/2, $d, $d, $d/2, $c1, $c2); }

/** blurred drop shadows for boxes [x,y,w,h,r] in 1x coords */
function shadows($im, $boxes, $tint, $maxAlpha = 0.40) {
    if (!$boxes) return;
    $k = 4; $mw = (int)(W/$k); $mh = (int)(H/$k);
    $m = imagecreatetruecolor($mw, $mh);
    imagefill($m, 0, 0, imagecolorallocate($m, 0, 0, 0));
    $white = imagecolorallocate($m, 255, 255, 255);
    foreach ($boxes as [$x, $y, $bw, $bh, $r])
        rrect($m, ($x+6)/$k, ($y+14)/$k, ($bw-12)/$k, ($bh-6)/$k, $r/$k, $white);
    for ($i = 0; $i < 14; $i++) imagefilter($m, IMG_FILTER_GAUSSIAN_BLUR);
    $layer = imagecreatetruecolor($mw, $mh);
    imagealphablending($layer, false); imagesavealpha($layer, true);
    for ($y = 0; $y < $mh; $y++) for ($x = 0; $x < $mw; $x++) {
        $g = (imagecolorat($m, $x, $y) & 0xFF) / 255;
        imagesetpixel($layer, $x, $y, imagecolorallocatealpha($layer, $tint[0], $tint[1], $tint[2], 127 - (int)round(127*$maxAlpha*$g)));
    }
    $big = imagecreatetruecolor(s(W), s(H));
    imagealphablending($big, false); imagesavealpha($big, true);
    imagefill($big, 0, 0, imagecolorallocatealpha($big, 0, 0, 0, 127));
    imagecopyresampled($big, $layer, 0, 0, 0, 0, s(W), s(H), $mw, $mh);
    imagealphablending($im, true);
    imagecopy($im, $big, 0, 0, 0, 0, s(W), s(H));
    imagedestroy($m); imagedestroy($layer); imagedestroy($big);
}
function textw($size, $font, $txt) { $b = imagettfbbox($size, 0, $font, $txt); return $b[2]-$b[0]; }
function fitsize($txt, $font, $base, $maxw) { $sz = $base; while ($sz > 10 && textw($sz, $font, $txt) > $maxw) $sz -= 1; return $sz; }
/** text whose visual middle sits at $cy */
function ctext($im, $size, $font, $txt, $x, $cy, $color, $refTxt = 'Hg') {
    $b = imagettfbbox($size, 0, $font, $refTxt);
    imagettftext($im, $size, 0, (int)$x, (int)round($cy - ($b[7] + $b[1]) / 2), $color, $font, $txt);
}
function ctext_center($im, $size, $font, $txt, $cx, $cy, $color, $ref = 'Hg') { ctext($im, $size, $font, $txt, $cx - textw($size, $font, $txt)/2, $cy, $color, $ref); }
function icon_at($im, $name, $cx, $cy, $size, $color) {
    global $FONT_ICON; $g = glyph($name);
    ctext($im, $size, $FONT_ICON, $g, $cx - textw($size, $FONT_ICON, $g)/2, $cy, $color, $g);
}
function qpoint($p0, $p1, $p2, $t) { return [(1-$t)**2*$p0[0] + 2*(1-$t)*$t*$p1[0] + $t*$t*$p2[0], (1-$t)**2*$p0[1] + 2*(1-$t)*$t*$p1[1] + $t*$t*$p2[1]]; }
function dots_curve($im, $p0, $p1, $p2, $color, $step = 14, $rad = 3) {
    $len = hypot($p2[0]-$p0[0], $p2[1]-$p0[1]); $n = max(4, (int)($len / s($step)));
    for ($i = 0; $i <= $n; $i++) { [$x, $y] = qpoint($p0, $p1, $p2, $i/$n); imagefilledellipse($im, (int)$x, (int)$y, s($rad)*2, s($rad)*2, $color); }
}
function brush_curve($im, $p0, $p1, $p2, $color, $rad) {
    for ($i = 0; $i <= 200; $i++) { $t = $i/200; [$x, $y] = qpoint($p0, $p1, $p2, $t);
        $rr = $rad * (0.35 + 0.65*sin(M_PI*$t)); imagefilledellipse($im, (int)$x, (int)$y, (int)(2*$rr), (int)(2*$rr), $color); }
}
function dashed_ellipse($im, $cx, $cy, $rx, $ry, $color, $dash = 9, $dot = 2.2) {
    $n = (int)(2*M_PI*sqrt(($rx*$rx + $ry*$ry)/2) / s($dash));
    for ($i = 0; $i < $n; $i++) { $a = 2*M_PI*$i/$n; imagefilledellipse($im, (int)($cx + $rx*cos($a)), (int)($cy + $ry*sin($a)), s($dot)*2, s($dot)*2, $color); }
}
function hexagon($im, $cx, $cy, $r, $color, $thick = 2) {
    $pts = []; for ($i = 0; $i < 6; $i++) { $a = M_PI/6 + $i*M_PI/3; $pts[] = (int)($cx + $r*cos($a)); $pts[] = (int)($cy + $r*sin($a)); }
    imagesetthickness($im, s($thick)); imagepolygon($im, $pts, $color); imagesetthickness($im, 1);
}
function sparkle($im, $x, $y, $r, $c) {
    imagefilledpolygon($im, [s($x), s($y-$r*2), s($x+$r*0.5), s($y-$r*0.5), s($x+$r*2), s($y), s($x+$r*0.5), s($y+$r*0.5), s($x), s($y+$r*2), s($x-$r*0.5), s($y+$r*0.5), s($x-$r*2), s($y), s($x-$r*0.5), s($y-$r*0.5)], $c);
}
function glyph($name) { global $ICONS; return mb_chr(hexdec($ICONS[$name] ?? 'E713')); }
function feature_icon($label) {
    global $KEYMAP; $l = strtolower(str_replace('^', ' ', $label));
    foreach ($KEYMAP as $re => $ic) if (preg_match('~' . $re . '~', $l)) return $ic;
    return 'check';
}
/** draw 1-2 line label; align 'l' (x = left edge) or 'c' (x = centre) */
function label($im, $txt, $x, $cy, $maxw, $base, $color, $align = 'l', $lh = 27) {
    global $FONT_BOLD;
    $lines = explode('^', $txt); $fs = s($base);
    foreach ($lines as $ln) $fs = min($fs, fitsize($ln, $FONT_BOLD, $fs, s($maxw)));
    $lhS = s($lh); $start = s($cy) - (count($lines)-1)*$lhS/2;
    foreach ($lines as $k => $ln) {
        $xx = $align === 'c' ? s($x) - textw($fs, $FONT_BOLD, $ln)/2 : s($x);
        ctext($im, $fs, $FONT_BOLD, $ln, $xx, $start + $k*$lhS, $color);
    }
}

/* ------------------------------------------------------------ backgrounds */
function bg_paint($stops, $blobs, $dir) {
    $sw = 480; $sh = 150; $q = W / $sw;
    $bg = imagecreatetruecolor($sw, $sh);
    for ($y = 0; $y < $sh; $y++) for ($x = 0; $x < $sw; $x++) {
        $k = $dir === 'v' ? $y/$sh : (($x/$sw)*0.6 + ($y/$sh)*0.4);
        $c = $k < 0.5 ? mix($stops[0], $stops[1], $k*2) : mix($stops[1], $stops[2], ($k-0.5)*2);
        foreach ($blobs as [$bx, $by, $rx, $ry, $bc, $st]) {
            $d = (($x*$q-$bx)/$rx)**2 + (($y*$q-$by)/$ry)**2;
            if ($d < 1) { $f = 1-$d; $c = mix($c, $bc, $st*$f*$f); }
        }
        imagesetpixel($bg, $x, $y, col($bg, $c));
    }
    $im = imagecreatetruecolor(s(W), s(H));
    imagecopyresampled($im, $bg, 0, 0, 0, 0, s(W), s(H), $sw, $sh);
    imagedestroy($bg);
    imagealphablending($im, true);
    return $im;
}
function rand_blobs($colors, $n, $centerColor = null, $centerSt = 0.7) {
    $b = [];
    for ($i = 0; $i < $n; $i++) {
        $left = $i % 2 === 0;
        $b[] = [$left ? rnd(-100, 500) : rnd(1420, 2020), rnd(-80, 680), rnd(300, 600), rnd(180, 340), $colors[$i % count($colors)], rnd(0.12, 0.32)];
    }
    if ($centerColor) $b[] = [960, rnd(230, 300), 720, 270, $centerColor, $centerSt];
    return $b;
}
function bg_light($P, $P2, $T) {
    return bg_paint([mix(WHITE, $T, 0.4), $T, mix($T, $P2, 0.18)], rand_blobs([$P2, $P], mt_rand(4, 6), WHITE, 0.75), 'd');
}
function waves($im, $colors, $base0 = 520) {
    foreach ($colors as $i => [$c, $alpha]) {
        $ph = rnd(0, 6.28); $amp = rnd(18, 42); $base = $base0 + $i*26; $freq = rnd(0.8, 1.6);
        $pts = [];
        for ($x = 0; $x <= W; $x += 20) { $pts[] = s($x); $pts[] = s($base + $amp*sin($x/W*2*M_PI*$freq + $ph)); }
        array_push($pts, s(W), s(H), 0, s(H));
        imagefilledpolygon($im, $pts, col($im, $c, $alpha));
    }
}
function dot_grid($im, $gx, $gy, $cols, $rows, $color, $gap = 22) {
    for ($i = 0; $i < $cols; $i++) for ($j = 0; $j < $rows; $j++)
        imagefilledellipse($im, s($gx + $i*$gap), s($gy + $j*$gap), s(5), s(5), $color);
}
function sparkles($im, $c, $n = 6, $zones = null) {
    $zones = $zones ?: [[480, 600, 40, 140], [1320, 1440, 40, 140], [520, 700, 500, 560], [1240, 1400, 500, 560], [250, 420, 90, 150], [1500, 1680, 90, 160]];
    for ($i = 0; $i < $n; $i++) { [$x1, $x2, $y1, $y2] = $zones[$i % count($zones)]; sparkle($im, rnd($x1, $x2), rnd($y1, $y2), rnd(4, 9), $c); }
}

/* ---------------------------------------------------- shared centre block */
/**
 * Heading: line1 / pill / line3 (+ swoosh under the last word).
 * $style: light | dark | vivid
 */
function heading($im, $l1, $hl, $l3, $top, $th, $style, $maxw = 800) {
    global $FONT_BLACK;
    [$P, $P2, $D, $T] = $th; $cx = s(W/2); $mw = s($maxw);
    $c1 = $style === 'light' ? $D : WHITE;
    $acc = $style === 'light' ? $P : ($style === 'dark' ? $P2 : mix(WHITE, $P2, 0.25));
    $sw  = $style === 'vivid' ? WHITE : $P2;

    $sz1 = fitsize($l1, $FONT_BLACK, s(40), $mw);
    ctext_center($im, $sz1, $FONT_BLACK, $l1, $cx, s($top), col($im, $c1));

    $szh = fitsize($hl, $FONT_BLACK, s(40), $mw - s(90));
    $tw = textw($szh, $FONT_BLACK, $hl); $pw = $tw + s(80); $ph = s(84); $px = $cx - $pw/2; $py = s($top + 34);
    if ($style === 'vivid') { rrect($im, $px, $py, $pw, $ph, $ph/2, col($im, WHITE)); $tc = $D; }
    else { grrect($im, $px, $py, $pw, $ph, $ph/2, $P, $P2); $tc = WHITE; }
    ctext($im, $szh, $FONT_BLACK, $hl, $cx - $tw/2, $py + $ph/2 + s(1), col($im, $tc));

    $sz3 = fitsize($l3, $FONT_BLACK, s(40), $mw);
    $parts = preg_split('/\s+(?=\S+$)/', $l3);
    $first = count($parts) > 1 ? $parts[0] : ''; $last = end($parts);
    $wf = $first !== '' ? textw($sz3, $FONT_BLACK, $first) : 0;
    $wl = textw($sz3, $FONT_BLACK, $last);
    $gap = $first !== '' ? textw($sz3, $FONT_BLACK, $first . ' ' . $last) - $wf - $wl : 0;
    $x3 = $cx - ($wf + $gap + $wl)/2; $y3 = s($top + 160);
    if ($first !== '') ctext($im, $sz3, $FONT_BLACK, $first, $x3, $y3, col($im, $c1));
    $xl = $x3 + $wf + $gap;
    ctext($im, $sz3, $FONT_BLACK, $last, $xl, $y3, col($im, $acc));
    brush_curve($im, [$xl, $y3 + s(36)], [$xl + $wl/2, $y3 + s(28)], [$xl + $wl, $y3 + s(36)], col($im, $sw, 20), s(4.2));
}
function heading_pill_box($hl, $top, $maxw = 800) {
    global $FONT_BLACK;
    $szh = fitsize($hl, $FONT_BLACK, s(40), s($maxw) - s(90));
    $pw = (textw($szh, $FONT_BLACK, $hl) + s(80)) / S;
    return [W/2 - $pw/2, $top + 34, $pw, 84, 42];
}
function cta_size() { global $FONT_BOLD, $FONT_ICON; return (textw(s(17), $FONT_BOLD, 'Read Full Article') + textw(s(15), $FONT_ICON, mb_chr(hexdec('E72A'))) + s(84)) / S; }
function cta($im, $top, $c1, $c2, $tc = WHITE) {
    global $FONT_BOLD, $FONT_ICON;
    $cta = 'Read Full Article'; $arrow = mb_chr(hexdec('E72A'));
    $ctw = textw(s(17), $FONT_BOLD, $cta);
    $bw = s(cta_size()); $bh = s(64); $bx = s(W/2) - $bw/2; $by = s($top);
    if ($c1 === $c2) rrect($im, $bx, $by, $bw, $bh, $bh/2, col($im, $c1)); else grrect($im, $bx, $by, $bw, $bh, $bh/2, $c1, $c2);
    ctext($im, s(17), $FONT_BOLD, $cta, $bx + s(38), $by + $bh/2, col($im, $tc));
    ctext($im, s(15), $FONT_ICON, $arrow, $bx + s(38) + $ctw + s(14), $by + $bh/2, col($im, $tc), $arrow);
}
function tagline($im, $cat, $y, $color, $lineColor) {
    global $FONT_SEMI;
    $tag = strtoupper('Mithila Softech  •  ' . $cat . ' Insights');
    $tsz = s(11.5); $tw = textw($tsz, $FONT_SEMI, $tag); $cx = s(W/2);
    $lx1 = $cx - $tw/2 - s(70); $lx2 = $cx + $tw/2 + s(18);
    imagefilledrectangle($im, (int)$lx1, s($y-1), (int)($lx1 + s(52)), s($y-1)+S, $lineColor);
    imagefilledrectangle($im, (int)$lx2, s($y-1), (int)($lx2 + s(52)), s($y-1)+S, $lineColor);
    ctext($im, $tsz, $FONT_SEMI, $tag, $cx - $tw/2, s($y), $color);
}
function badge($im, $icon, $y, $size, $ring, $fill, $glyphC) {
    $x = W/2 - $size/2;
    rrect($im, s($x), s($y), s($size), s($size), s($size*0.29), col($im, $ring));
    rrect($im, s($x)+s(3), s($y)+s(3), s($size)-s(6), s($size)-s(6), s($size*0.29 - 3), col($im, $fill));
    icon_at($im, $icon, s(W/2), s($y + $size/2), s($size*0.34), col($im, $glyphC));
}

/* ================================================================ LAYOUTS */

/** 1. Light background, 3+3 white feature cards with dotted connectors */
function layout_cards($d) {
    [$P, $P2, $D, $T] = $d['th'];
    $im = bg_light($P, $P2, $T);
    dot_grid($im, rnd(50, 120), rnd(30, 60), 6, 4, col($im, $P, 95));
    dot_grid($im, rnd(1660, 1720), rnd(460, 490), 6, 4, col($im, $P, 95));
    imagesetthickness($im, s(2));
    foreach ([[rnd(1800, 1900), rnd(0, 80), 260], [rnd(1800, 1900), rnd(0, 80), 380], [rnd(0, 80), rnd(540, 600), 300], [rnd(0, 80), rnd(540, 600), 430]] as [$cx, $cy, $dd])
        imageellipse($im, s($cx), s($cy), s($dd), s($dd), col($im, $P, 108));
    imagesetthickness($im, 1);
    waves($im, [[$P2, 112], [$P, 104], [$P, 96]]);
    sparkles($im, col($im, $P2, 50));

    $cardW = 380; $cardH = 86; $gap = 22; $top = 168; $lx = 40; $rx = W - 40 - $cardW;
    $boxes = [];
    for ($i = 0; $i < 6; $i++) $boxes[] = [$i < 3 ? $lx : $rx, $top + ($i % 3)*($cardH + $gap), $cardW, $cardH, 26];
    $boxes[] = [W/2 - 35, 40, 70, 70, 20]; $boxes[] = heading_pill_box($d['hl'], 170);
    $boxes[] = [W/2 - cta_size()/2, 452, cta_size(), 64, 32];
    shadows($im, $boxes, mix($D, $P, 0.55), 0.42);

    for ($i = 0; $i < 6; $i++) {
        $left = $i < 3; $r = $i % 3; $x = $left ? $lx : $rx; $y = $top + $r*($cardH + $gap); $cy = $y + $cardH/2;
        $p0 = $left ? [s($x+$cardW+8), s($cy)] : [s($x-8), s($cy)];
        $p2 = [s($left ? 560 : 1360), s(330 + ($r-1)*40)];
        dots_curve($im, $p0, [($p0[0]+$p2[0])/2, $p2[1]], $p2, col($im, $P, 70), 12, 2.2);
        imagefilledellipse($im, $p0[0], $p0[1], s(12), s(12), col($im, $P));
        imagefilledellipse($im, $p0[0], $p0[1], s(5), s(5), col($im, WHITE));
        rrect($im, s($x), s($y), s($cardW), s($cardH), s(26), col($im, mix($T, $P, 0.25), 60));
        rrect($im, s($x)+S, s($y)+S, s($cardW)-2*S, s($cardH)-2*S, s(25), col($im, WHITE, 8));
        grrect($im, s($x+16), s($y+14), s(58), s(58), s(16), $P, $P2);
        icon_at($im, feature_icon($d['f'][$i]), s($x+45), s($y+43), s(19), col($im, WHITE));
        label($im, $d['f'][$i], $x + 92, $cy, $cardW - 110, 15.5, col($im, $D));
    }
    badge($im, $d['icon'], 40, 70, $P, WHITE, $P);
    heading($im, $d['l1'], $d['hl'], $d['l3'], 170, $d['th'], 'light');
    tagline($im, $d['cat'], 413, col($im, mix($D, $T, 0.25)), col($im, $P, 60));
    cta($im, 452, $P, mix($P, $P2, 0.6));
    return $im;
}

/** 2. Orbit: concentric dashed ellipses, features as round bubbles on the orbit */
function layout_orbit($d) {
    [$P, $P2, $D, $T] = $d['th'];
    $im = bg_paint([WHITE, mix(WHITE, $T, 0.7), $T], rand_blobs([$P2, $P], 4, WHITE, 0.6), 'v');
    $cx = s(W/2); $cy = s(300);
    imagefilledellipse($im, $cx, $cy, s(1100), s(470), col($im, $T, 70));
    imagefilledellipse($im, $cx, $cy, s(880), s(380), col($im, WHITE, 40));
    dashed_ellipse($im, $cx, $cy, s(780), s(300), col($im, $P, 70), 10, 2.4);
    dashed_ellipse($im, $cx, $cy, s(930), s(370), col($im, $P2, 95), 12, 2);
    dashed_ellipse($im, $cx, $cy, s(620), s(235), col($im, $P2, 100), 9, 1.8);
    for ($i = 0; $i < 10; $i++) { $a = rnd(0, 2*M_PI); imagefilledellipse($im, (int)($cx + s(930)*cos($a)), (int)($cy + s(370)*sin($a)), s(10), s(10), col($im, $P2, 50)); }
    sparkles($im, col($im, $P, 60), 5);

    $pos = [[310, 120], [175, 290], [310, 455], [1610, 120], [1745, 290], [1610, 455]];
    $boxes = [];
    foreach ($pos as [$x, $y]) $boxes[] = [$x - 46, $y - 46, 92, 92, 46];
    $boxes[] = heading_pill_box($d['hl'], 170); $boxes[] = [W/2 - cta_size()/2, 452, cta_size(), 64, 32];
    shadows($im, $boxes, mix($D, $P, 0.5), 0.38);
    foreach ($pos as $i => [$x, $y]) {
        imagefilledellipse($im, s($x), s($y), s(96), s(96), col($im, WHITE));
        gcircle($im, s($x), s($y), s(74), $P, $P2);
        icon_at($im, feature_icon($d['f'][$i]), s($x), s($y), s(22), col($im, WHITE));
        $left = $i < 3;
        $lx = $left ? $x + 66 : $x - 66;
        $lw = 230;
        $lines = explode('^', $d['f'][$i]);
        // label pill next to the bubble
        global $FONT_BOLD;
        $fs = s(14); foreach ($lines as $ln) $fs = min($fs, fitsize($ln, $FONT_BOLD, $fs, s($lw)));
        $wmax = 0; foreach ($lines as $ln) $wmax = max($wmax, textw($fs, $FONT_BOLD, $ln));
        $bw = $wmax/S + 32; $bh = 66; $bx = $left ? $lx : $lx - $bw;
        rrect($im, s($bx), s($y - $bh/2), s($bw), s($bh), s(18), col($im, WHITE, 18));
        label($im, $d['f'][$i], $bx + 16, $y, $lw, 14, col($im, $D), 'l', 25);
    }
    // central badge as a circle
    imagefilledellipse($im, s(W/2), s(76), s(78), s(78), col($im, $P));
    imagefilledellipse($im, s(W/2), s(76), s(70), s(70), col($im, WHITE));
    icon_at($im, $d['icon'], s(W/2), s(76), s(24), col($im, $P));
    heading($im, $d['l1'], $d['hl'], $d['l3'], 170, $d['th'], 'light', 760);
    tagline($im, $d['cat'], 413, col($im, mix($D, $T, 0.2)), col($im, $P, 60));
    cta($im, 452, $D, mix($D, $P, 0.7));
    return $im;
}

/** 3. Dark neon: deep background, perspective grid, glass pills */
function layout_neon($d) {
    [$P, $P2, $D, $T] = $d['th'];
    $deep = mix($D, [0, 0, 0], 0.35);
    $im = bg_paint([$deep, mix($D, $P, 0.25), $deep], [[960, 260, 760, 300, mix($D, $P, 0.55), 0.6], [rnd(0, 300), rnd(0, 200), 420, 260, $P, 0.35], [rnd(1600, 1920), rnd(400, 600), 460, 280, $P2, 0.3]], 'd');
    // perspective grid floor
    $hz = 430; imagesetthickness($im, S);
    for ($i = -14; $i <= 14; $i++) imageline($im, s(960 + $i*22), s($hz), s(960 + $i*170), s(H), col($im, $P2, 100));
    for ($k = 0; $k < 8; $k++) { $y = $hz + (H - $hz) * pow($k/7, 1.8); imageline($im, 0, s($y), s(W), s($y), col($im, $P2, 104)); }
    imagesetthickness($im, 1);
    // stars + hexagons
    for ($i = 0; $i < 70; $i++) imagefilledellipse($im, s(rnd(0, W)), s(rnd(0, $hz)), s(rnd(1.5, 3.5)), s(rnd(1.5, 3.5)), col($im, WHITE, rnd(60, 105)));
    foreach ([[rnd(470, 540), rnd(80, 140), 34], [rnd(1380, 1450), rnd(70, 130), 26], [rnd(1380, 1440), rnd(380, 420), 20], [rnd(470, 520), rnd(370, 410), 22]] as [$x, $y, $r])
        hexagon($im, s($x), s($y), s($r), col($im, $P2, 60));
    // glowing rings behind heading
    imagesetthickness($im, s(2));
    imageellipse($im, s(960), s(300), s(940), s(420), col($im, $P2, 105));
    imageellipse($im, s(960), s(300), s(1060), s(480), col($im, $P, 112));
    imagesetthickness($im, 1);

    $pw = 400; $phh = 76; $gap = 26; $top = 160;
    $glass = mix($D, $P, 0.22);
    for ($i = 0; $i < 6; $i++) {
        $left = $i < 3; $x = $left ? 40 : W - 40 - $pw; $y = $top + ($i % 3)*($phh + $gap);
        rrect($im, s($x)-S, s($y)-S, s($pw)+2*S, s($phh)+2*S, s($phh/2)+S, col($im, $P2, 55));
        rrect($im, s($x)+S, s($y)+S, s($pw)-2*S, s($phh)-2*S, s($phh/2)-S, col($im, $glass, 0));
        $icx = $left ? $x + 40 : $x + $pw - 40;
        gcircle($im, s($icx), s($y + $phh/2), s(56), $P, $P2);
        icon_at($im, feature_icon($d['f'][$i]), s($icx), s($y + $phh/2), s(18), col($im, WHITE));
        label($im, $d['f'][$i], $left ? $x + 82 : $x + 26, $y + $phh/2, $pw - 120, 15, col($im, WHITE));
    }
    badge($im, $d['icon'], 40, 70, $P2, $deep, $P2);
    heading($im, $d['l1'], $d['hl'], $d['l3'], 170, $d['th'], 'dark');
    tagline($im, $d['cat'], 413, col($im, mix(WHITE, $P2, 0.3)), col($im, $P2, 50));
    cta($im, 452, $P2, $P);
    return $im;
}

/** 4. Vivid: bold full-colour gradient, white pill, feature chips along the bottom */
function layout_vivid($d) {
    [$P, $P2, $D, $T] = $d['th'];
    $im = bg_paint([mix($P, $D, 0.15), $P, $P2], [[960, 230, 700, 260, mix($P, WHITE, 0.25), 0.5], [rnd(1500, 1900), rnd(0, 200), 400, 260, $P2, 0.4]], 'd');
    // big translucent circles + stripes
    foreach ([[rnd(0, 200), rnd(-50, 120), rnd(300, 420)], [rnd(1720, 1920), rnd(80, 260), rnd(260, 380)], [rnd(300, 450), rnd(520, 620), rnd(160, 240)]] as [$x, $y, $r])
        imagefilledellipse($im, s($x), s($y), s($r*2), s($r*2), col($im, WHITE, 116));
    imagesetthickness($im, s(3));
    for ($i = 0; $i < 9; $i++) imageline($im, s(1600 + $i*26), s(0), s(1440 + $i*26), s(170), col($im, WHITE, 112));
    for ($i = 0; $i < 9; $i++) imageline($im, s(60 + $i*26), s(470), s(-100 + $i*26), s(640), col($im, WHITE, 116));
    imagesetthickness($im, 1);
    // floating feature glyphs in the side areas
    $spots = [[250, 150, 96], [440, 300, 70], [170, 360, 60], [1670, 150, 90], [1480, 300, 66], [1760, 360, 60]];
    foreach ($spots as $i => [$x, $y, $sz]) {
        imagefilledellipse($im, s($x), s($y), s($sz*1.9), s($sz*1.9), col($im, WHITE, 108));
        icon_at($im, feature_icon($d['f'][$i]), s($x), s($y), s($sz*0.42), col($im, WHITE, 40));
    }

    // bottom chips
    $n = 6; $gap = 14; $cw = (W - 80 - ($n-1)*$gap) / $n; $chH = 76; $cy0 = 486;
    $boxes = [heading_pill_box($d['hl'], 150)];
    for ($i = 0; $i < $n; $i++) $boxes[] = [40 + $i*($cw+$gap), $cy0, $cw, $chH, 22];
    shadows($im, $boxes, mix($D, [0, 0, 0], 0.4), 0.45);
    for ($i = 0; $i < $n; $i++) {
        $x = 40 + $i*($cw+$gap);
        rrect($im, s($x), s($cy0), s($cw), s($chH), s(22), col($im, WHITE, 6));
        gcircle($im, s($x + 38), s($cy0 + $chH/2), s(50), $P, $P2);
        icon_at($im, feature_icon($d['f'][$i]), s($x + 38), s($cy0 + $chH/2), s(16), col($im, WHITE));
        label($im, $d['f'][$i], $x + 72, $cy0 + $chH/2, $cw - 84, 13.5, col($im, $D), 'l', 24);
    }
    badge($im, $d['icon'], 30, 66, WHITE, mix($P, $D, 0.2), WHITE);
    heading($im, $d['l1'], $d['hl'], $d['l3'], 150, $d['th'], 'vivid');
    tagline($im, $d['cat'], 418, col($im, WHITE, 20), col($im, WHITE, 60));
    return $im;
}

/** 5. Mockups: browser window (left) + phone (right), feature chips under heading */
function layout_mockup($d) {
    global $FONT_BOLD;
    [$P, $P2, $D, $T] = $d['th'];
    $im = bg_paint([mix(WHITE, $T, 0.3), $T, mix($T, $P, 0.12)], rand_blobs([$P2, $P], 4, WHITE, 0.8), 'd');
    dot_grid($im, rnd(560, 620), rnd(40, 70), 5, 3, col($im, $P, 100));
    dot_grid($im, rnd(1250, 1290), rnd(500, 520), 5, 3, col($im, $P, 100));
    waves($im, [[$P2, 116], [$P, 112]], 545);

    $bx = 60; $by = 110; $bw = 430; $bh = 350;      // browser
    $px = 1560; $py = 70; $pw = 240; $ph = 460;     // phone
    $chips = [str_replace('^', ' ', $d['f'][0]), str_replace('^', ' ', $d['f'][1]), str_replace('^', ' ', $d['f'][2])];
    $csz = s(13); $cws = []; foreach ($chips as $c) $cws[] = textw($csz, $FONT_BOLD, $c)/S + 62;
    while (array_sum($cws) + 24 > 820 && $csz > s(10)) { $csz -= 1; $cws = []; foreach ($chips as $c) $cws[] = textw($csz, $FONT_BOLD, $c)/S + 62; }
    $cx0 = W/2 - (array_sum($cws) + 24)/2;
    $boxes = [[$bx, $by, $bw, $bh, 22], [$px, $py, $pw, $ph, 40], heading_pill_box($d['hl'], 150, 780), [W/2 - cta_size()/2, 470, cta_size(), 64, 32],
              [$bx + 170, $by + 290, 250, 74, 20], [$px - 150, $py + 330, 250, 74, 20]];
    $xx = $cx0; foreach ($cws as $w) { $boxes[] = [$xx, 392, $w, 46, 23]; $xx += $w + 12; }
    shadows($im, $boxes, mix($D, $P, 0.5), 0.40);

    // browser window
    rrect($im, s($bx), s($by), s($bw), s($bh), s(22), col($im, WHITE));
    rrect($im, s($bx), s($by), s($bw), s(44), s(22), col($im, mix($T, $P, 0.12)));
    imagefilledrectangle($im, s($bx), s($by + 30), s($bx + $bw), s($by + 44), col($im, mix($T, $P, 0.12)));
    foreach ([['#FF5F57'], ['#FEBC2E'], ['#28C840']] as $k => [$hc]) imagefilledellipse($im, s($bx + 26 + $k*22), s($by + 22), s(12), s(12), col($im, rgb($hc)));
    rrect($im, s($bx + 100), s($by + 12), s(240), s(20), s(10), col($im, WHITE));
    // chart bars
    $base = $by + 270;
    for ($k = 0; $k < 7; $k++) {
        $hgt = rnd(50, 170);
        grrect($im, s($bx + 34 + $k*40), s($base - $hgt), s(24), s($hgt), s(8), $P2, $P, false);
    }
    // trend line
    $pts = []; for ($k = 0; $k < 7; $k++) $pts[] = [$bx + 46 + $k*40, $base - 130 - rnd(0, 60) + $k*4];
    imagesetthickness($im, s(3));
    for ($k = 0; $k < 6; $k++) imageline($im, s($pts[$k][0]), s($pts[$k][1]), s($pts[$k+1][0]), s($pts[$k+1][1]), col($im, $D, 30));
    imagesetthickness($im, 1);
    foreach ($pts as [$x, $y]) { imagefilledellipse($im, s($x), s($y), s(11), s(11), col($im, $D)); imagefilledellipse($im, s($x), s($y), s(5), s(5), col($im, WHITE)); }
    // donut in browser
    $dx = $bx + 360; $dy = $by + 110; $vals = [rnd(90, 160), rnd(70, 120)]; $a0 = -90;
    imagefilledellipse($im, s($dx), s($dy), s(90), s(90), col($im, $T));
    imagefilledarc($im, s($dx), s($dy), s(90), s(90), (int)$a0, (int)($a0 + $vals[0]), col($im, $P), IMG_ARC_PIE);
    imagefilledarc($im, s($dx), s($dy), s(90), s(90), (int)($a0 + $vals[0]), (int)($a0 + $vals[0] + $vals[1]), col($im, $P2), IMG_ARC_PIE);
    imagefilledellipse($im, s($dx), s($dy), s(50), s(50), col($im, WHITE));
    for ($k = 0; $k < 3; $k++) rrect($im, s($bx + 330), s($by + 180 + $k*22), s(rnd(50, 80)), s(10), s(5), col($im, $T));

    // phone
    rrect($im, s($px), s($py), s($pw), s($ph), s(40), col($im, $D));
    rrect($im, s($px + 10), s($py + 10), s($pw - 20), s($ph - 20), s(32), col($im, WHITE));
    rrect($im, s($px + $pw/2 - 36), s($py + 18), s(72), s(16), s(8), col($im, $D));
    grrect($im, s($px + 22), s($py + 48), s($pw - 44), s(110), s(18), $P, $P2);
    icon_at($im, $d['icon'], s($px + $pw/2), s($py + 103), s(34), col($im, WHITE));
    for ($k = 0; $k < 4; $k++) {
        $ry = $py + 180 + $k*54;
        rrect($im, s($px + 22), s($ry), s($pw - 44), s(42), s(12), col($im, mix(WHITE, $T, 0.8)));
        imagefilledellipse($im, s($px + 44), s($ry + 21), s(22), s(22), col($im, $k % 2 ? $P2 : $P));
        icon_at($im, 'check', s($px + 44), s($ry + 21), s(8), col($im, WHITE));
        rrect($im, s($px + 64), s($ry + 12), s(rnd(80, 120)), s(8), s(4), col($im, mix($D, WHITE, 0.6)));
        rrect($im, s($px + 64), s($ry + 25), s(rnd(50, 80)), s(6), s(3), col($im, mix($D, WHITE, 0.8)));
    }
    // floating stat chips overlapping the mockups (features 4 and 5)
    foreach ([[$bx + 170, $by + 290, 3], [$px - 150, $py + 330, 4]] as [$x, $y, $fi]) {
        rrect($im, s($x) - S, s($y) - S, s(250) + 2*S, s(74) + 2*S, s(20) + S, col($im, mix($T, $P, 0.35)));
        rrect($im, s($x), s($y), s(250), s(74), s(20), col($im, WHITE));
        grrect($im, s($x + 12), s($y + 12), s(50), s(50), s(14), $P, $P2);
        icon_at($im, feature_icon($d['f'][$fi]), s($x + 37), s($y + 37), s(16), col($im, WHITE));
        label($im, $d['f'][$fi], $x + 74, $y + 37, 165, 13, col($im, $D), 'l', 23);
    }

    badge($im, $d['icon'], 36, 62, $P, WHITE, $P);
    heading($im, $d['l1'], $d['hl'], $d['l3'], 150, $d['th'], 'light', 780);
    $xx = $cx0;
    foreach ($chips as $k => $c) {
        rrect($im, s($xx), s(392), s($cws[$k]), s(46), s(23), col($im, WHITE));
        imagefilledellipse($im, s($xx + 24), s(415), s(28), s(28), col($im, $P));
        icon_at($im, 'check', s($xx + 24), s(415), s(10), col($im, WHITE));
        ctext($im, $csz, $FONT_BOLD, $c, s($xx + 46), s(415), col($im, $D));
        $xx += $cws[$k] + 12;
    }
    cta($im, 470, $P, mix($P, $P2, 0.6));
    return $im;
}

/** 6. Bands: angled colour bands on both sides carrying the feature list */
function layout_bands($d) {
    [$P, $P2, $D, $T] = $d['th'];
    $im = bg_paint([WHITE, mix(WHITE, $T, 0.6), $T], [[960, 300, 600, 300, WHITE, 0.7]], 'v');
    // light geometric pattern in centre
    foreach ([[620, 760, 30, 110], [1160, 1300, 30, 110], [620, 760, 500, 570], [1160, 1300, 500, 570]] as [$x1, $x2, $y1, $y2]) hexagon($im, s(rnd($x1, $x2)), s(rnd($y1, $y2)), s(rnd(14, 26)), col($im, $P, 106), 1.5);
    sparkles($im, col($im, $P2, 50), 4, [[600, 700, 60, 120], [1220, 1320, 60, 120], [620, 700, 470, 540], [1220, 1300, 470, 540]]);
    $t1 = rnd(560, 600); $b1 = $t1 - rnd(70, 110);
    $t2 = W - rnd(560, 600); $b2 = $t2 + rnd(70, 110);
    // band shadows (soft edge)
    imagefilledpolygon($im, [0, 0, s($t1 + 14), 0, s($b1 + 14), s(H), 0, s(H)], col($im, $P, 105));
    imagefilledpolygon($im, [s(W), 0, s($t2 - 14), 0, s($b2 - 14), s(H), s(W), s(H)], col($im, $P2, 105));
    // bands as vertical gradients
    for ($y = 0; $y < s(H); $y += 2) {
        $k = $y / s(H);
        $xe = s($t1) + ($s = (s($b1) - s($t1)) * $k);
        imagefilledrectangle($im, 0, $y, (int)$xe, $y + 1, col($im, mix(mix($P, $D, 0.15), $P, $k)));
        $xs = s($t2) + (s($b2) - s($t2)) * $k;
        imagefilledrectangle($im, (int)$xs, $y, s(W), $y + 1, col($im, mix($P, $P2, 0.3 + $k*0.7)));
    }
    // texture on bands
    imagesetthickness($im, s(2));
    for ($i = 0; $i < 8; $i++) imageellipse($im, s(rnd(-40, 160)), s(rnd(-40, 60)), s(120 + $i*50), s(120 + $i*50), col($im, WHITE, 116));
    for ($i = 0; $i < 8; $i++) imageellipse($im, s(rnd(1760, 1960)), s(rnd(540, 640)), s(120 + $i*50), s(120 + $i*50), col($im, WHITE, 116));
    imagesetthickness($im, 1);
    dot_grid($im, 40, 520, 6, 3, col($im, WHITE, 90), 18);
    dot_grid($im, 1770, 30, 6, 3, col($im, WHITE, 90), 18);

    $ys = [150, 300, 450];
    for ($i = 0; $i < 6; $i++) {
        $left = $i < 3; $y = $ys[$i % 3];
        $icx = $left ? 90 : W - 90;
        imagefilledellipse($im, s($icx), s($y), s(76), s(76), col($im, WHITE, 90));
        imagefilledellipse($im, s($icx), s($y), s(60), s(60), col($im, WHITE));
        icon_at($im, feature_icon($d['f'][$i]), s($icx), s($y), s(20), col($im, $left ? $P : mix($P, $P2, 0.4)));
        if ($left) label($im, $d['f'][$i], 145, $y, ($t1 + ($b1 - $t1)*($y/H)) - 175, 17, col($im, WHITE), 'l', 30);
        else {
            $edge = $t2 + ($b2 - $t2)*($y/H) + 30;
            $lw = (W - 145) - $edge;
            // right aligned text
            global $FONT_BOLD;
            $lines = explode('^', $d['f'][$i]); $fs = s(17);
            foreach ($lines as $ln) $fs = min($fs, fitsize($ln, $FONT_BOLD, $fs, s($lw)));
            $start = s($y) - (count($lines)-1)*s(30)/2;
            foreach ($lines as $k => $ln) ctext($im, $fs, $FONT_BOLD, $ln, s(W - 145) - textw($fs, $FONT_BOLD, $ln), $start + $k*s(30), col($im, WHITE));
        }
    }
    shadows($im, [heading_pill_box($d['hl'], 170, 720), [W/2 - cta_size()/2, 452, cta_size(), 64, 32], [W/2 - 35, 40, 70, 70, 20]], mix($D, $P, 0.5), 0.4);
    badge($im, $d['icon'], 40, 70, $P2, WHITE, $P);
    heading($im, $d['l1'], $d['hl'], $d['l3'], 170, $d['th'], 'light', 720);
    tagline($im, $d['cat'], 413, col($im, mix($D, $T, 0.2)), col($im, $P, 60));
    cta($im, 452, $D, mix($D, $P, 0.6));
    return $im;
}

/* =================================================================== main */
function render($d, $out) {
    mt_srand(crc32($d['slug']));
    $im = call_user_func('layout_' . $d['layout'], $d);
    $final = imagecreatetruecolor(W, H);
    imagecopyresampled($final, $im, 0, 0, 0, 0, W, H, s(W), s(H));
    imageinterlace($final, true);
    imagejpeg($final, $out, 88);
    imagedestroy($im); imagedestroy($final);
}

$only = $argv[1] ?? null;
$outDir = $root . '/assets/image/blog-banners';
if (!is_dir($outDir)) mkdir($outDir, 0775, true);
$n = 0; $idx = 0;
foreach (file(__DIR__ . '/banners.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    if ($line[0] === '#') continue;
    $row = array_map('trim', explode(';', $line));
    if (count($row) < 11) { fwrite(STDERR, "Bad row: $line\n"); continue; }
    $i = $idx++;
    if ($only && $row[0] !== $only) continue;
    $d = [
        'slug' => $row[0], 'l1' => $row[1], 'hl' => $row[2], 'l3' => $row[3], 'icon' => $row[4],
        'f' => array_slice($row, 5, 6), 'cat' => $cats[$row[0]] ?? 'Technology',
        'layout' => $LAYOUTS[$i % count($LAYOUTS)],
        'th' => array_map('rgb', $PALETTES[$i % count($PALETTES)]),
    ];
    render($d, "$outDir/{$row[0]}.jpg");
    $n++;
    printf("ok  %-72s %-7s palette %d\n", $row[0], $d['layout'], $i % count($PALETTES));
}
echo "$n banner(s) written to assets/image/blog-banners/\n";
