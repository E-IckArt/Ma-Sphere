<?php

require_once 'functions.php';

/* session_start() :
    - Si la session n'existe pas (n'a pas encore été démarrée) => crée un nouveau PHPSESSID, identifiant de session et va l'inscrire dans les cookies.
    - Si la session a été démarrée (sur une autre page par exemple) => récupère l'id de la session et rétablit le contexte.
*/

session_start();

// Vérifier si la clé 'connected' est défini dans la superglobale $_SESSION et si elle est égale à true.

$connected = (isset($_SESSION['connected']) && $_SESSION['connected'] === true);

if (!$connected) {
    // Redirection
    redirect('../login.php');
    exit; // S'il n'y a pas d'exit, le script peut continuer et afficher la page admin.php avec succès.
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel<title>
</head>

<body>
    <h1>Bienvenue !</h1>
    <a href="#">Déconnexion</a>
</body>

</html>