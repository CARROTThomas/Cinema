<div class="container affiches">
    <?php foreach ($affichesCinema as $afficheCinema) :  ?>
        <div class="col-4">
            <div class="p-3 border border-secondary m-2">
                <h3><?= $afficheCinema["title"] ?></h3>
                <p><?= $afficheCinema["description"] ?></p>
                <a href="afficheCinema.php?id=<?= $afficheCinema['id'] ?>" class="btn btn-success">Lire</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
