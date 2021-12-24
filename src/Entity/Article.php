<?php

/*MAPPING de l'ensemble de la table annonce */
include_once __DIR__."/../../vendor/SimpleOrm.class.php";

class Annonce extends SimpleOrm {

    public $id;
    public $name;
    public $description;
    

    
}


?>