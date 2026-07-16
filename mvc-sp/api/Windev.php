<?php

require_once '../include/parametre.php';

$cnx = new PDO('mysql:host='.SERVEUR.';dbname='.BASE,NOM,PASSE,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(isset($_POST['action'])){
    switch($_POST['action']){

        case 'add_Client':
            add_client();
            break;

        case 'update_stock':
            update_stock();
            break;
    }
}else{
    echo "";
}

if(isset($_GET['action'])){
    if(isset($_GET['wDemande']) && $_GET['wDemande'] == "azerty2QWERTY") {
        switch ($_GET['action']) {
            case 'get_client':
                get_client();
                break;

            case 'get_commandes':
                get_commandes();
                break;
        }
    }
    else{
        echo "ACCESS INTERDIT";
    }
}

function update_stock(){
    global $cnx;

    try{
        $data = json_decode($_POST['data']);
        foreach($data as $value){
            $sql = "UPDATE produit SET stock = stock + ? WHERE reference = ?";

            $idRequete = $cnx->prepare($sql);
            $idRequete->execute([$value->{"COL_Quantité_Demandée"},$value->COL_Code_produit_Fournisseur]);
        }
        echo '1';
    }catch (PDOException $e){
        // gestion de l'erreur captée
        echo "Echec lors de la connexion : " . $e->getMessage();
        exit;
    }
}

function get_commandes(){
    global $cnx;

    try {

        // Interface de connexion entre windev et MySQL de sp-vendeur
        if(isset($_GET['wDemande']) && $_GET['wDemande'] == "azerty2QWERTY"){

            // Définition des constantes pour connexion à MySQL via PDO

            $sql ="SELECT designation, reference, stock, 120 - stock as acommander FROM produit WHERE stock < 50";

            $idRequete = $cnx->query($sql);

            if(!$idRequete){
                echo "Erreur : R&eacute;cup&eacute;ration des données impossible. &bnsp;";
            }

            while ($donnees = $idRequete->fetch()){
                // SEP = séparateur de ligne et le ; sera le séparateur de données

                echo $donnees['designation'] . " ; " . $donnees['reference'] . " ; " . $donnees['stock'] . " ; " . $donnees['acommander'] . " sep ";
            }
        }else{
            echo "ACCESS INTERDIT";
        }

    }catch (PDOException $e){
        // gestion de l'erreur captée
        echo "Echec lors de la connexion : " . $e->getMessage();
        exit;
    }
}

function add_client(){

    global $cnx;

    try {
        // Définition des constantes pour connexion à MySQL via PDO

        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $telephone = $_POST['telephone'];

        $sql = "INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES ('$nom', '$adresse', '$cp', '$ville', '$telephone')";

        $idRequete = $cnx->query($sql);

        if($idRequete) {
                echo 1;
        }else{
            echo "Mémorisation des données impossible";
        }

    }catch (PDOException $e){
        // gestion de l'erreur captée
        echo "Echec lors de la connexion : " . $e->getMessage();
        exit;
    }
}

function get_client(){

    global $cnx;
    try{
        // Définition des constantes pour connexion à MySQL via PDO

        $sql ="SELECT * FROM client";

        $idRequete = $cnx->query($sql);

        if(!$idRequete){
            echo "Erreur : R&eacute;cup&eacute;ration des données impossible. &bnsp;";
        }

        while ($donnees = $idRequete->fetch()){
            // SEP = séparateur de ligne et le ; sera le séparateur de données

            echo $donnees['code_c'] . " ; " . $donnees['nom'] . " ; " . $donnees['cp'] . " ; " . $donnees['ville'] . " sep ";
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}