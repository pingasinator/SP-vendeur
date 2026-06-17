<?php


class Commande
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = []; //tableau
    private $oControleur; // Object

    private static $ErrorMessage;

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé

        // Création d'une instance de la classe ProfilControleur
        $this->oControleur = new CommandeControleur($parametre);
    }


    public function choixAction()
    {

        // Méthode par défaut si aucune action n'est spécifiée
        if(isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {

            }
        }else{
            $this->oControleur->Lister();
        }
    }

    public static function getErrorMessage(){
        return self::$ErrorMessage;
    }

    public static function setErrorMessage($ErrorMessage){
        self::$ErrorMessage = $ErrorMessage;
    }
}
