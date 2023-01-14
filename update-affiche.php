<?php
require_once ('core/Entity/AfficheCinema.php');
require_once ('core/App/View.php');
require_once ('core/App/Response.php');

$id = null;
$title = null;
$description = null;
if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}
if(!empty($_POST['title']) && ctype_digit($_POST['title']) ){
    $title = $_POST['title'];
}
if(!empty($_POST['description']) && ctype_digit($_POST['description']) ){
    $description = $_POST['description'];
}

if ($id)
{
    $afficheEntity = new \Entity\AfficheCinema();
    $affiche = $afficheEntity->findById($id);

    if (!$affiche)
    {
        App\Response::redirect();
    }
}

if ($title && $description)
{
    $updateAfficheCinemaEntity = new \Entity\AfficheCinema();
    $updateAfficheCinemaEntity->update($id, $title, $description);

    App\Response::redirect('afficheCinema.php?id='.$id);
}

App\View::render("afficheCinema/updateAffiche", [
    "affiche"=>$affiche,
    "pageTitle"=>"Update le post"
]);
?>