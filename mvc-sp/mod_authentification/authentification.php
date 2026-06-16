<?php

/**
 * Class Authentification
 * Routeur du module Authentification
 */
class Authentification
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = array(); //tableau
    private $oControleur; // Object

    private static $errorMessage = "";

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé
        // require_once 'mod_accueil/controleur/accueilControleur.php';
        // Création d'une instance de la classe AccueilControleur
        $this->oControleur = new AuthentificationControleur($parametre);
    }


    public function choixAction()
    {

        // ICI à venir une structure alternative de type switch()
        // traitant les différentes actions possibles

        // Méthode par défaut si aucune action n'est spécifiée
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'authentifier' :
                    $this->oControleur->Authentifier();
                    break;

                case 'validation_authentification':
                    if($_POST['login'] !== '' && $_POST['password'] !== '')
                    {
                        $this->oControleur->valider_authentification();
                    }else{
                        $this->oControleur->Authentifier();
                    }

                    break;
            }
        }
    }

    public static function getErrorMessage(){
        return self::$errorMessage;
    }

    public static function setErrorMessage($errorMessage){
        self::$errorMessage = $errorMessage;
    }
}
