<?php

class AuthentificationModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    /**
     * @return array|null
     */
    public function getListeClients()
    {

        $sql = "SELECT * FROM client";

        $idRequete = $this->executeRequete($sql);

        // Retourner le tableau d'objets
        if ($idRequete->rowCount() > 0) {

            while ($client = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $clients[] = new ClientTable($client);
            }

            return $clients;

        } else {

            return null;
        }

    }


    /**
     * @return ClientTable
     */

    public function getLogin(){
        $sql = "SELECT login, motdepasse FROM vendeur WHERE login = ?";
        $idRequete = $this->executeRequete($sql, [$_POST['login']]);

        return $idRequete->fetch(PDO::FETCH_ASSOC);
    }
}