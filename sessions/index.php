<?php

// var_dump(session_status() === PHP_SESSION_NONE);

session_start(); // Démarrage d'une session. L'accès à la variable $_SESSION est maintenant possible
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body>
    <a href="admin.php">Administration</a>
</body>

</html>