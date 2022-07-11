<?php

function verifyUploadedFiles()
{
    $extensions = array('jpg', 'png', 'jpeg', 'pdf');
    $uploads_dir = 'uploads/avatars' . DIRECTORY_SEPARATOR;
    $fileName = $uploads_dir . $_FILES['avatar']['name'];
    $fileInfo = pathinfo($_FILES['avatar']['name']);

    if (isset($_FILES['avatar']) && !$_FILES['avatar']['error'] && is_uploaded_file($_FILES['avatar']['tmp_name'])) {
        if ($_FILES['avatar']['size'] <= 2000000) {
            if (in_array($fileInfo['extension'], $extensions)) {
                if (!is_dir($uploads_dir)) {
                    try {
                        mkdir('uploads/avatars');
                        echo 'Le répertoire a été créé';
                    } catch (Exception $e) {
                        echo 'Une erreur est survenue, le répertoire n\a pas été crée :' . $e->getMessage();
                    }
                }
                move_uploaded_file($_FILES['avatar']['tmp_name'], $fileName);
            } else {
                echo "Ce type de fichier n'est pas autorisé";
            }
        } else {
            echo "La taille du fichier dépasse les 2Mo autorisés";
        }
    }
}

if (!empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    require_once 'pdo/db_connect.php';
    verifyUploadedFiles();

    try {

        $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, age, email, password, avatar) VALUES (:firstname, :lastname, :age, :email, :password, :avatar)");

        $stmt->execute([
            'firstname' => htmlentities($_POST['firstname'] ?? "", ENT_SUBSTITUTE),
            'lastname' => $_POST['lastname'] ?? "",
            'age' => $_POST['age'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT), // cryptage du mot de passe avant insertion en bdd
            'avatar' => $_FILES['avatar']['name'], // Bonne pratique - Eviter d'enregistrer le répertoire d'upload en BDD, mettre seulement le nom du fichier.
        ]);

        header('Location: profil.php');
    } catch (Exception $exception) {
        file_put_contents('signin_logs.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
        exit('Une erreur s\'est produite. Les données n\'ont pu être enregistrées. Veuillez vérifier votre saisie et valider à nouveau.');
    }
} else {
    echo 'Il manque des données pour soumettre votre formulaire';
}
