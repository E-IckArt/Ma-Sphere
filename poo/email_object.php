<?php

require_once 'Email.php';

// Test instanciation d'un objet valide
try {
    $email = new Email("test@test.com");
    echo '<pre>';
    var_dump($email);
} catch (InvalidArgumentException $e) {
    echo 'Erreur : le format de l\'email est incorrect';
}

// Test instanciation d'un objet invalide
try {
    $email2 = new Email("Mon email");
    echo '<pre>';
    var_dump($email2);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
