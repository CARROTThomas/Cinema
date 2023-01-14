<?php
require_once ('core/App/View.php');
require_once ('core/Entity/AfficheCinema.php');
require_once ('core/App/Response.php');

$title = null;
$description=null;
if( !empty($_POST['title'])){
    $title = $_POST['title'];
}
if( !empty($_POST['description'])){
    $description = $_POST['description'];
}

if ($title && $description)
{
    $affiche = new Entity\AfficheCinema();
    $affiche->insert($title, $description);

    App\Response::redirect();
}

App\View::render(
    "afficheCinema/createAfficheCinema", [
        "pageTitle"=>"nouvelle affiche"
    ]);
?>