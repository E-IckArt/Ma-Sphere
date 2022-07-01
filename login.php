<?php
$title = "Connexion";
require_once 'layout/header.php' ?>

<!-- Main Container -->
<div class="container">
    <div class="row">
        <div class="col my-3">
            <h1>Connexion</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail</label>
                    <input type="email" class="form-control" id="email" placeholder="nom@example.com" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Entrez l'adresse mail renseignée lors de l'inscription</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Se souvenir de moi</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-5">Me connecter</button>
                    <a href=""> Mot de passe oublié ? </a>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>