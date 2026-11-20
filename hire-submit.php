<?php

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

header('Content-Type: text/plain');
$hostname = 'localhost';
$username = 'u912883576_mithilasoftech';
$password = 'Mithilasoftech_2023';
$database = 'u912883576_mithilasoftech';


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

    $name = trim($_POST['your_name'] ?? '');
    $email = trim($_POST['your_email'] ?? '');
    $country_code = trim($_POST['countryCode'] ?? '');
    $mobile = trim($_POST['phone_number'] ?? '');
    $role = trim($_POST['hireDevelopers'] ?? '');
    $hiring_model = trim($_POST['hireDeveloperType'] ?? '');

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS gs_hire_developers (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(150) NOT NULL,
            email VARCHAR(190) NOT NULL,
            country_code VARCHAR(10) DEFAULT NULL,
            mobile VARCHAR(30) DEFAULT NULL,
            role VARCHAR(150) DEFAULT NULL,
            hiring_model VARCHAR(100) DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
    ");

    $stmt = $pdo->prepare("
        INSERT INTO gs_hire_developers
        (name, mobile, country_code, email, role, hiring_model)
        VALUES
        (:name, :mobile, :country_code, :email, :role, :hiring_model)
    ");

    $stmt->execute([
        ':name' => $name,
        ':mobile' => $mobile,
        ':country_code' => $country_code,
        ':email' => $email,
        ':role' => $role,
        ':hiring_model' => $hiring_model
    ]);

    // The hire form's JavaScript checks for this exact text.
    echo "INSERT successful";

} catch (Throwable $e) {

    error_log('hire-submit: ' . $e->getMessage());
    echo "ERROR";
}
