<?php

if (!isset($_GET['id'])) {
    echo "Veuillez renseigner un utilisateur";
    exit;
} // 1ere protection contre l'accès aux informations de la BDD par modification de l'URL

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



// Récupérer l'ID de l'utilisateur depuis l'URL
$id = intval($_GET['id']);
if ($id === 0) {
    echo "Veuillez renseigner un identifiant utilisateur correct";
    exit;
} // 2eme protection

// Récupérer l'utilisateur dans la BDD

// Requête non préparée
// $query = "SELECT * FROM users WHERE id= $id";
// $statement = $pdo->query($query);

// Requête préparée
$statement = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$statement->execute(['id' => $id]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

// Afficher les infos de l'utilisateur
if (!$user) {
    echo 'Utilisateur non trouvé';
} else {
    echo '<pre>';
    var_dump($user);
}
