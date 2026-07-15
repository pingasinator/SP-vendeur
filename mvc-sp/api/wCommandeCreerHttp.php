<?php

require_once '../include/parametre.php';

$cnx = new PDO('mysql:host='.SERVEUR.';dbname='.BASE,NOM,PASSE,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST['Commande'])){

}

if(isset($_POST['LigneCommande'])){
    $data = JSON_encode($_POST['LigneCommande']);

    $i = 0;
    foreach($data as $ligne){

    }
}