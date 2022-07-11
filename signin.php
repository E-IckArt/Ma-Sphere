<?php
$title = "Inscription";
require_once 'layout/header.php';
?>

<!-- Main Container -->
<div class="container">
    <div class="row">
        <div class="col my-3">
            <h1>M'inscrire</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="signin_treatment.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre nom" maxlength="32">
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" maxlength="32" placeholder="nom@example.com">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age *</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Votre âge" min=13 max=120 aria-describedby="ageHelp" required>
                    <div id="ageHelp" class="form-text">Inscription possible à partir de 13ans. Certaines fonctionnalités du site sont réservées aux personnes majeures.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nom@example.com" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Cette adresse sera utilisée lors de la connexion</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe *</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" minlength=8 required>
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Photo de profil</label>
                    <input class="form-control" type="file" name="avatar" id="avatar">
                </div>
                <div class="mb-3 form-check">
                    <!-- TODO - Champ à ajouter en DB ??? -->
                    <input class="form-check-input" type="checkbox" value="" id="cgu" name="cgu" required>
                    <label class="form-check-label" for="cgu">
                        J'ai lu et j'accepte les <a href="">Conditions d'Utilisation</a>.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mb-3">M'inscrire</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>