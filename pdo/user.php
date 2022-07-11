<?php

if (!isset($_GET['id'])) {
    echo "Veuillez renseigner un utilisateur";
    exit;
} // 1ere protection contre l'accès aux informations de la BDD par modification de l'URL

require_once 'db_connect.php';

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
