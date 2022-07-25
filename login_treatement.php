<?php

require_once 'sessions/functions.php';
require_once 'sessions/ConnectionErrorCode.php';

$connect = !empty($_POST['email']) && !empty($_POST['password']);

if ($connect) {
    require_once 'pdo/db_connect.php';
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");
$execution = $stmt->execute([
    'email' => $_POST['email'],
]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

session_start();

if ($result === false) {
    $_SESSION['connection_error_code'] = ConnectionErrorCode::INVALID_CREDENTIALS;
    redirect('login.php');
} else {
    if (password_verify($_POST['password'], $result['password'])) {
        $_SESSION['connected'] = true;
        redirect('profil.php');
    } else {
        $_SESSION['connection_error_code'] = ConnectionErrorCode::INVALID_CREDENTIALS;
        redirect('login.php');
    }
}
