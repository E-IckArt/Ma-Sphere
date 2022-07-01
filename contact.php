<?php
$title = "Contact";
require_once 'layout/header.php' ?>

<!-- Main Container -->
<div class="container">
    <div class="row">
        <div class="col my-3">
            <h1>Contact</h1>

        </div>
    </div>
    <div class="row">
        <form action="" method="">
            <div class="col-12 col-md-8 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom" required>
                            <label for="lastname">Nom</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" required>
                            <label for="firstname">Prénom</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nom@example.com" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Laissez votre message ici" id="floatingTextarea" name="message" style="height: 200px" required></textarea>
                    <label for="floatingTextarea">Message</label>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>

</div>
<?php require_once 'layout/footer.php' ?>