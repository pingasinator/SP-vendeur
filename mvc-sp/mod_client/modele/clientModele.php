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
        if(empty(ClientTable::getMessageErreur())){
            $sql = "INSERT INTO client (nom,adresse,cp,ville,telephone) VALUES (?,?,?,?,?)";
            $this->executeRequete($sql, [$newClient->getNom(),$newClient->getAdresse(),$newClient->getCp(),$newClient->getVille(),$newClient->getTelephone()]);
            ClientTable::setMessageSuccess("Client ajouté avec succes");
        }
    }

    public function modifierUnClient(){

        $newClient = new ClientTable($_POST);
        $sql = "UPDATE client SET nom = ?, adresse = ?, cp = ?, ville = ?, telephone = ? WHERE codec = ?";
        $this->executeRequete($sql, [$newClient->getNom(),$newClient->getAdresse(),$newClient->getCp(),$newClient->getVille(),$newClient->getTelephone(), $newClient->getCodec()]);
        ClientTable::setMessageSuccess("Client modifié avec succes");
    }

    public function supprimerUnClient(){

        $newClient = new ClientTable($_POST);
        if($this->canDeleteClient()){
            $sql = "DELETE FROM client WHERE codec = ?";
            $this->executeRequete($sql, [$newClient->getCodec()]);
            ClientTable::setMessageSuccess("Client supprimé avec succes");
        }else{
            ClientTable::setMessageErreur('Error, le client "'. $newClient->getNom() . '"a des commandes');
        }

    }

    public function canDeleteClient(){
        $newClient = new ClientTable($_POST);
        $sql = "SELECT count(numero) FROM commande WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$newClient->getCodec()]);

        return $idRequete->fetchColumn() <= 0;

    }

    public function stat01(ClientTable $client){
        $sql = "SELECT SUM(total_ht) as st01 FROM commande WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$client->getCodec()]);

        $ligne = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($ligne['st01'] != null) {
            $client->setStat01($ligne['st01']);
        }else{
            $client->setStat01(0);
        }
    }

    public function stat02(ClientTable $client){
        $sql = "SELECT sum(total_ht) as st02 FROM commande WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$client->getCodec()]);
        $val1 = $idRequete->fetch(PDO::FETCH_ASSOC);

        $sql = "SELECT sum(total_ht) as allcommands FROM commande";
        $idRequete = $this->executeRequete($sql);
        $val2 = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($val1['st02'] != null && $val2['allcommands'] != null) {
            $client->setStat02($val1['st02'] / $val2['allcommands'] * 100);
        }




    }
}