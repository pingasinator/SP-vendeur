<?php
/**
 * Class AccueilControleur
 * Controleur du modue accueil
 */

class AccueilControleur
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé
        // require_once 'mod_accueil/vue/accueilVue.php';
        // Création d'une instance de la classe AccueilControleur
        $this->oVue = new AccueilVue($parametre);
    }

    public function lister(){

        $this->oVue->genererAffichageListe();

    }
}
