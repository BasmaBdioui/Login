<?php

try{

    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root' , '');

}catch(Exeption $e){
    die ('Erreur' .$e->getMessahe());
}

?>