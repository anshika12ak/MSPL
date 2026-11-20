<?php

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

$hostname = 'localhost';
$username = 'u912883576_mithilasoftech';
$password = 'Mithilasoftech_2023';
$database = 'u912883576_mithilasoftech';

$ok = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO(
            "mysql:host=$hostname;dbname=$database;charset=utf8mb4",
            $username,
            $password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $mobile = trim($_POST['phone'] ?? '');
        $message = trim($_POST['message'] ?? '');

        $stmt = $pdo->prepare("
            INSERT INTO gs_contact_us
            (name, mobile, email, message)
            VALUES
            (:name, :mobile, :email, :message)
        ");

        $stmt->execute([
            ':name' => $name,
            ':mobile' => $mobile,
            ':email' => $email,
            ':message' => $message
        ]);

        $ok = true;
    } catch (Throwable $e) {
        error_log('contact-submit: ' . $e->getMessage());
    }
}

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title><?= $ok ? 'Thank You' : 'Something Went Wrong' ?> | Mithila Softech</title>
    <style>
        body { margin: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f5f7fb; font-family: system-ui, -apple-system, "Segoe UI", sans-serif; color: #0b1f5c; padding: 16px; box-sizing: border-box; }
        .box { max-width: 480px; width: 100%; background: #fff; border-radius: 20px; padding: 40px 28px; text-align: center; box-shadow: 0 14px 34px rgba(15, 23, 42, 0.10); }
        h1 { font-size: 1.6rem; margin: 0 0 12px; }
        p { color: #4b5563; line-height: 1.6; margin: 0 0 24px; }
        a { display: inline-block; background: #1e5eff; color: #fff; text-decoration: none; padding: 12px 28px; border-radius: 999px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="box">
        <?php if ($ok): ?>
            <h1>Thank you!</h1>
            <p>Your message has been received. Our team will get back to you shortly.</p>
        <?php else: ?>
            <h1>Something went wrong</h1>
            <p>We couldn't send your message right now. Please try again, or contact us by phone or WhatsApp.</p>
        <?php endif; ?>
        <a href="index">Back to Home</a>
    </div>
</body>
</html>
