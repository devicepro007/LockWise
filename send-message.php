<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

require_once __DIR__ . '/database/connection.php';

$name = $_POST['name-input'] ?? '';
$email = $_POST['email-input'] ?? '';
$phone = $_POST['phone-input'] ?? '';
$address = $_POST['address-input'] ?? '';
$message = $_POST['message-input'] ?? '';

$sql = "INSERT INTO messages (name, email, phone, address, message)
        VALUES (:name, :email, :phone, :address, :message)";

try {
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':address' => $address,
        ':message' => $message
    ]);

    header("Location: /pages/send-message-success.php");
    exit;

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}