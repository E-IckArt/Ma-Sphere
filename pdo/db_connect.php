<?php

$dbConfig = parse_ini_file('db.ini');

if ($dbConfig === false) {
    echo 'Erreur : problème de configuration.';
    exit;
}

try {
    $pdo = new PDO(
        $dbConfig['DB_DSN'],
        $dbConfig['DB_USER'],
        $dbConfig['DB_PASSWORD']
    );
} catch (PDOException $e) {
    file_put_contents('dblogs.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
    exit('Erreur : Connexion à la base de données impossible');
}
