<?php
session_start();
require_once 'sessions/functions.php';

// Efface toutes données contenues dans la variable $_SESSION
$_SESSION = array();
// Efface les cookies de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
// Détruit la session
session_destroy();
// Redirige vers la page d'accueil
redirect('index.php');
