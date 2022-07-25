<?php
session_start();
require_once 'data/users_list.php';

$title = "Accueil";
require_once 'layout/header.php'
?>
<div class="container">
    <div class="row mt-5">
        <div class="col text-center">
            <h2>Nombres d'utilisateurs : <?php echo count($users); ?></h2>
        </div>
    </div>
    <div class="row justify-content-evenly align-items-center align-content-center ">
        <?php foreach ($users as $userId => $userInfos) : ?>
            <?php require 'user_card.php' ?>
        <?php endforeach ?>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col mx-auto text-center">
            <a href="" type="button" class="btn btn-outline-primary">
                Voir plus de profils
            </a>
        </div>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>