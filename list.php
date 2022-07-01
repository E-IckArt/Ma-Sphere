<?php

// Ce fichier n'est pas encore utilisé

require_once 'data/users_list.php';

$title = "Liste des utilisateurs";
require_once 'layout/header.php'
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2>Nombres d'utilisateurs : <?php echo count($users); ?></h2>
        </div>
    </div>
    <div class="row justify-content-evenly align-items-center align-content-center ">
        <?php foreach ($users as $userId => $userInfos) : ?>
            <?php require 'user_card.php' ?>
        <?php endforeach ?>
    </div>
</div>
<?php require_once 'layout/footer.php' ?>