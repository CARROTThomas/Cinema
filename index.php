<?php
require_once ('core/App/View.php');
require_once ('core/Entity/AfficheCinema.php');

$affichesCinemaEntity = new \Entity\AfficheCinema();

App\View::render("afficheCinema/home", [
    "affichesCinema"=>$affichesCinemaEntity->findAll(),
    "pageTitle"=>"accueil du cinéma"
]);
?>