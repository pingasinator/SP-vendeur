<?php
try {

    // Interface de connexion entre windev et MySQL de sp-vendeur
    if(isset($_GET['wDemande']) && $_GET['wDemande'] != "azerty2QWERTY"){

        // Définition des constantes pour connexion à MySQL via PDO
        define('SERVER','localhost');
        define('USER','root');
        define('PASS','');
        define('BASE','spvendeurs');

        $cnx = new PDO('mysql:host='.SERVER.';dbname='.BASE,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $sql ="SELECT * FROM client";

        $idRequete = $cnx->query($sql);

        if(!$idRequete){
            echo "Erreur : R&eacute;cup&eacute;ration des données impossible. &bnsp;";
        }

        while ($donnees = $idRequete->fetch()){
            // SEP = séparateur de ligne et le ; sera le séparateur de données

            echo $donnees['code_c'] . " ; " . $donnees['nom'] . " ; " . $donnees['cp'] . " ; " . $donnees['ville'];
        }
    }else{
        echo "ACCESS INTERDIT";
    }

}catch (PDOException $e){
    // gestion de l'erreur captée
    echo "Echec lors de la connexion : " . $e->getMessage();
    exit;
}