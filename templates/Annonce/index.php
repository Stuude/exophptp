<?php
include __DIR__ . '/../../templates/header.php';
?>

<h1 class="text-center">Liste d'annonces</h1>

<?php
foreach ($annonces as $annonce) {
?>
    
        <div class="card m-5" style="width: 15rem">
            <div class="card-body">
                
                <p class="card-text"><?= $annonce->id?></p>
                <h5 class="card-title"><?= $annonce->name ?></h5>
                <p class="card-text"><?= $annonce->description ?></p>

                <form action="/favorite/add" method="POST">
                    <input type="hidden" name="id" value=" <?= $article->id ?>">
                    <button type="submit" class="btn btn-danger">Ajouter au favoris</button>
                   
                </form>

            </div>
        </div>
<?php }?>






<?php

include __DIR__ . '/../../templates/footer.php';
?>