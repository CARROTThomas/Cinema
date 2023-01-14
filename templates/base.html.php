<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?></title>
    <link rel="website icon" type="png" href="img/controller.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<!---->

<!--  navBar  -->
<header class="container">
    <nav class="nav d-flex justify-content-between align-items-center">
        <span class="logo" href="index.php">LOGO</span>
        <div class="d-flex justify-content-between align-items-center">
            <ul class="d-flex">
                <li><a class="lien" href="#">create affiche film</a></li>
            </ul>
        </div>
    </nav>
</header>


<div class="container-fluid">
    <?= $pageContent ?>
</div>


<!--  Footer  -->
<section class="footer">
    <div class="container d-flex flex-column">
        <hr>
        <div class="row">
            <span class="logo" href="index.php">LOGO</span>
        </div>
        <div class="row d-flex justify-content-around">
            <div class="col-4">
                <h2 class="text-secondary">Conditions</h2>
                <ul>
                    <li><a href="#" class="lienFooter">Politique de confidentalité</a></li>
                    <li><a href="#" class="lienFooter">Condition de vente</a></li>
                    <li><a href="#" class="lienFooter">Nous contacter</a></li>
                    <li><a href="#" class="lienFooter">FAQ</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h2 class="text-secondary">Contact</h2>
                <ul>
                    <li class="d-flex align-items-center"><a href="https://www.instagram.com/" class="lienFooter"><i class="bi bi-instagram me-1"></i>Instagram</a></li>
                    <li class="d-flex align-items-center"><a href="https://www.youtube.com/" class="lienFooter"><i class="bi bi-youtube me-1"></i>Youtube</a></li>
                    <li class="d-flex align-items-center"><a href="https://twitter.com/" class="lienFooter"><i class="bi bi-twitter me-1"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-row justify-content-between align-items-center">
            <p class="text-light fw-bolder">Copyright © 2023 - All rights reserved</p>
            <p class="text-light fw-bolder">Français | EUR</p>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="JS/main.js"></script>
</body>
</html>