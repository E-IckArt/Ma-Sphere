<div class="col-12 col-md-6 col-lg-4">
    <div class="card mx-auto my-3 shadow" style="width: 18rem;">
        <img src="<?= $userInfos['picture'] ?>" class="card-img-top" alt="Photo de profil">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $userInfos['name'] ?><span class="fs-6 fw-light fst-italic"> - <?= $userInfos['age'] ?> ans</span></h5>
            <p class="card-text"><?= substr($userInfos['description'], 0, 50)  ?> ...</p>
            <a href="#" class="btn btn-primary align-self-center">Voir le profil de <?= $userInfos['name'] ?></a>
        </div>
    </div>
</div>