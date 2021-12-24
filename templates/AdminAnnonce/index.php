<?php
include __DIR__ . '/../../templates/header.php';
?>


<h1>Ajout d'une nouvelle annonce</h1>


<form action="/admin/annonce/add" method="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">Name </label>
        <input type="text" name="annoncename" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="Desc">Descritpion</label>
        <textarea class="form-control" name="desc" id="Desc" rows="3"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>


<?php
include __DIR__ . '/../../templates/footer.php';
?>