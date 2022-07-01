<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        // echo isset($title) ? $title : 'Ma sphère PHP'
        echo $title ?? 'Ma sphère PHP'
        ?>
    </title>
    <link rel="shortcut icon" href="../assets/circle.svg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-bold" href="../index.php">
                    <img src="../assets/circle.svg" alt="logo Ma sphère" width="30" height="auto" class="d-inline-block align-text-top">
                    Ma sphère
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../signin.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mon espace
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Mon profil</a></li>
                                <li><a class="dropdown-item" href="#">Mes messages</a></li>
                                <li><a class="dropdown-item" href="#">Mes amis</a></li>
                                <li><a class="dropdown-item" href="#">Mes paramètres</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#" style="background-color: #e3f2fd;">Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher un utilisateur" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>