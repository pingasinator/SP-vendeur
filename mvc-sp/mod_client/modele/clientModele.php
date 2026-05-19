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

    public function ajouterUnClient(){

        $newClient = new ClientTable($_POST);
        $sql = "INSERT INTO client (nom,adresse,cp,ville,telephone) VALUES (?,?,?,?,?)";
        $idRequete = $this->executeRequete($sql, [$newClient->getNom(),$newClient->getAdresse(),$newClient->getCp(),$newClient->getVille(),$newClient->getTelephone()]);
    }

    public function modifierUnClient(){

        $newClient = new ClientTable($_POST);
        $sql = "UPDATE client SET nom = ?, adresse = ?, cp = ?, ville = ?, telephone = ? WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$newClient->getNom(),$newClient->getAdresse(),$newClient->getCp(),$newClient->getVille(),$newClient->getTelephone(), $newClient->getCodec()]);
    }

    public function supprimerUnClient(){

        $newClient = new ClientTable($_POST);
        $sql = "DELETE FROM client WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$newClient->getCodec()]);
    }
}