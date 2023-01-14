<?php
require_once ('core/App/View.php');
require_once ('core/Entity/AfficheCinema.php');

$affichesCinemaEntity = new \Entity\AfficheCinema();
$affichesCinemaEntity = $affichesCinemaEntity->findAll();
//print_r($afficheCinemaEntity);

App\View::render("afficheCinema/home", [
    "affichesCinema"=>$affichesCinemaEntity,
    "pageTitle"=>"accueil du cinéma"
]);
?>