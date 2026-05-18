<?php
class ClientModele extends Modele
{

 private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    /**
     * @return array|null
     */
    public function getListeClients(){

        $sql = "SELECT * FROM client";

        $idRequete = $this->executeRequete($sql);

        // Retourner le tableau d'objets
        if($idRequete->rowCount() > 0){

            while($client = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $clients[] = new ClientTable($client);
            }

            return $clients;

        }else{

            return null;
        }

    }


    /**
     * @return ClientTable
     */
    public function getUnClient(){

        $sql = "SELECT * FROM client WHERE codec = ?";

        $idRequete = $this->executeRequete($sql, [$this->parametre['codec']]);

        // Retourner le client ... Un objet de type ClientTable
//        $clientTableauAssociatif = $idRequete->fetch(PDO::FETCH_ASSOC);
//        $clientObjet = new ClientTable($clientTableauAssociatif);
//        return $clientObjet;

        // Manière plus synthétique
        return new ClientTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }
}