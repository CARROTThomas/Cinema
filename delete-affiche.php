<?php
require_once ('core/Entity/AfficheCinema.php');
require_once ('core/App/Response.php');

$id = null;
if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}

if ($id)
{
    $afficheCinemaEntity = new \Entity\AfficheCinema();
    $affiche = $afficheCinemaEntity->delete($id);

    App\Response::redirect();
}
?>
