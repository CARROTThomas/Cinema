<div class="container">
    <a href="index.php" class="btn d-flex align-items-center m-3"><span class="material-symbols-outlined">keyboard_arrow_left</span>Retour</a>
</div>
<div class="container d-flex flex-column justify-content-center">
    <div class="d-flex flex-column align-items-center">
        <h2 class="fw-bold"><?= $affiche["title"] ?></h2>
        <p class="fw-semibold"><?= $affiche["description"] ?></p>
    </div>
    <div class="d-flex justify-content-end">
        <a href="delete-affiche.php?id=<?= $affiche['id'] ?>" class="btn d-flex align-items-center border m-1"><span class="material-symbols-outlined">delete</span>Delete</a>
        <a href="update-affiche.php?id=<?= $affiche['id'] ?>" class="btn d-flex align-items-center border m-1"><span class="material-symbols-outlined">edit</span>Update</a>
    </div>
</div>
