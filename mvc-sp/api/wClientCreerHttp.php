<?php

try {
    if(isset($_POST['windev']) && $_POST['windev'] == "ajouter"){

        // Définition des constantes pour connexion à MySQL via PDO
        define('SERVER','localhost');
        define('USER','root');
        define('PASS','');
        define('BASE','spvendeurs');

        $cnx = new PDO('mysql:host='.SERVER.';dbname='.BASE,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $telephone = $_POST['telephone'];

        $sql = "INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES ('$nom', '$adresse', '$cp', '$ville', '$telephone')";

        $idRequete = $cnx->query($sql);

        if ($idRequete) {
            echo 1;
        }else{
            echo "Mémorisation des données impossible";
        }
    }else{
        echo "ACCESS INTERDIT";
    }

}catch (PDOException $e){
    // gestion de l'erreur captée
    echo "Echec lors de la connexion : " . $e->getMessage();
    exit;
}