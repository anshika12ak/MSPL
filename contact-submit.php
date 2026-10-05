<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

header('Content-Type: text/plain');
echo "1. PHP started\n";
$hostname = 'localhost';
$username = 'u912883576_mithilasoftech';
$password = 'Mithilasoftech_2023';
$database = 'u912883576_mithilasoftech';


try {

    echo "2. Starting database connection\n";

    $pdo = new PDO(
        "mysql:host=$hostname;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    echo "3. Database connected\n";

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mobile = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    echo "4. Form data received\n";
    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Mobile: $mobile\n";

    $stmt = $pdo->prepare("
        INSERT INTO gs_contact_us
        (name, mobile, email, message)
        VALUES
        (:name, :mobile, :email, :message)
    ");

    echo "5. Query prepared\n";

    $stmt->execute([
        ':name' => $name,
        ':mobile' => $mobile,
        ':email' => $email,
        ':message' => $message
    ]);

    echo "6. INSERT successful\n";

} catch (Throwable $e) {

    echo "ERROR:\n";
    echo $e->getMessage();
}