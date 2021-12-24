<?php

function index(){
    include __DIR__.'/../../templates/AdminAnnonce/index.php';
}
///// SAVE UNE 
function save(){
    // on stocke dans les variables les données récupérées du form grace au name
    $annoncename=$_POST['annoncename'];
    $description=$_POST['desc'];
    

    include __DIR__.'/../Entity/Article.php';
    $annonce=new Annonce();
    $annonce->name=$annoncename;
    $annonce->description=$description;
    
  
    $annonce->save();

    echo"Ajout terminé";

}

