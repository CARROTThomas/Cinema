<div class="container">
    <a href="afficheCinema.php?id=<?= $affiche['id'] ?>" class="btn d-flex align-items-center m-3"><span class="material-symbols-outlined">keyboard_arrow_left</span>retour</a>
</div>
<div class="container d-flex flex-column align-items-center">
    <h1 class="mt-5">Edit Msg</h1>
    <div>
        <form class="d-flex flex-column align-items-center" action="" method="POST">
            <input type="text" name="title" value="<?= $affiche['title'] ?>">
            <input type="text" name="description" value="<?= $affiche['description'] ?>">
            <input type="submit" value="MODIFIER">
        </form>
    </div>
</div>