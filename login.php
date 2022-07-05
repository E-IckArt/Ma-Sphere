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
                    <button type="submit" class="btn btn-primary me-5">Me connecter<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-box-arrow-in-right ms-2" viewBox="0 0 18 18">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></button>
                    <a href=""> Mot de passe oublié ? </a>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>