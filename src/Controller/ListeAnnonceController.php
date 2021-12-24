<?php 
///////// VOIR TOUTES LES ANNONCES
function index (){

    // RECUP DE TOUTES LES ANNONCES

    include __DIR__.'../../Entity/Article.php';
    // Récupérer l'ensemble des articles
    $annonces = Annonce::all();

    // var_dump($articles);
    include __DIR__.'/../../templates/Annonce/index.php';
}


function fav (){
    include __DIR__.'/../../templates/Favoris/ListeFavoris.php';
}



?>