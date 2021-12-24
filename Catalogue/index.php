<?php
include __DIR__ . '/../../templates/header.php';
?>


<h1>Liste des articles</h1>

<?php
foreach ($articles as $article) {
?>
    <div class="card m-2">

        <?= $article->id ?><br>
        <?= $article->name ?><br>
        <?= $article->description ?><br>
        <?= $article->price ?><br>

        <form action="/cart/add" method="POST">
            <input type="hidden" name="id" value=" <?= $article->id ?>">
            <button type="submit" class="btn btn-primary">Ajouter au panier</button>
        </form>

    </div>



<?php
}
include __DIR__ . '/../../templates/footer.php';
?>