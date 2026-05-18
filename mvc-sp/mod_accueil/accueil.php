<?php
/**
 * Class Accueil
 * Routeur du module accueil
 */

class Accueil{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = array(); //tableau
    private $oControleur; // Object

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé
        // require_once 'mod_accueil/controleur/accueilControleur.php';
        // Création d'une instance de la classe AccueilControleur
        $this->oControleur = new AccueilControleur($parametre);
    }


    public function choixAction(){

        // ICI à venir une structure alternative de type switch()
        // traitant les différentes actions possibles

        // Méthode par défaut si aucune action n'est spécifiée
        $this->oControleur->lister();
    }

}
