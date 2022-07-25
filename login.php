<?php
session_start();

$title = "Connexion";
require_once 'sessions/ConnectionErrorCode.php';
require_once 'layout/header.php' ?>

<!-- Main Container -->
<div class="container">
    <div class="row">

        <?php
        // Vérifie si un code d'erreur est présent dans $_SESSION avant d'afficher le formulaire de connexion.
        if (isset($_SESSION['connection_error_code'])) {
            switch ($_SESSION['connection_error_code']) {
                case ConnectionErrorCode::INVALID_CREDENTIALS:
                    $errorMsg = ' Les identifiants saisis sont incorrects. Veuillez recommencer.';
                    break;
                case ConnectionErrorCode::DB_ERROR:
                    $errorMsg = 'Erreur de base de données';
                    break;
                case ConnectionErrorCode::SERVICE_UNAVAILABLE:
                    $errorMsg = 'Service indisponible';
                    break;
                default:
                    $errorMsg = 'Une erreur est survenue';
            }
            unset($_SESSION['connection_error_code']); // Efface la clé connection_error_code après affichage du message d'erreur.
        ?>
            <div class="row">
                <div class="col mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $errorMsg ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col my-3">
            <h1>Connexion</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8">
            <form method="post" action="login_treatement.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" id="email" placeholder="nom@example.com" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Entrez l'adresse mail renseignée lors de l'inscription</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 form-check">
                            <!-- TODO - Fonctionnalité à implémenter -->
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Se souvenir de moi</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href=""> Mot de passe oublié ? </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3 text-center mx-auto">
                        <button type="submit" class="btn btn-primary">Me connecter<img src="assets/login.svg" alt="icone de connexion" class="ms-2">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>