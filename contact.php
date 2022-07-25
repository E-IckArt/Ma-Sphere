<?php
session_start();
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
                <button type="submit" class="btn btn-primary">Envoyer <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-send" viewBox="0 0 18 18">
                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                    </svg></button>
            </div>
        </form>
    </div>

</div>
<?php require_once 'layout/footer.php' ?>