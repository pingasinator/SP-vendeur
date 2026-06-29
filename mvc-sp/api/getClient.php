<?php

require_once '../include/parametre.php';

try{

    $cnx = new PDO("mysql:host=".SERVEUR."; dbname=".BASE, NOM, PASSE,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $sql = "SELECT * FROM client WHERE codec = ?";

    $idRequete = $cnx->prepare($sql);
    $idRequete->execute([$_POST["codec"]]);

    if($idRequete->rowCount() > 0){
        echo json_encode($idRequete->fetch(PDO::FETCH_ASSOC));
    }


}catch (PDOException $e){
    echo $e->getMessage();
}
