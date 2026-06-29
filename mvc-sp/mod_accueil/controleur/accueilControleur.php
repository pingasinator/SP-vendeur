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

    private $oModele;

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé
        // require_once 'mod_accueil/vue/accueilVue.php';
        // Création d'une instance de la classe AccueilControleur
        $this->oModele = new AccueilModele($parametre);

        $this->oVue = new AccueilVue($parametre);
    }

    public function lister(){

        $this->oVue->genererAffichageListe();


    }

    public function genererChiffreAffaire(){
        echo json_encode($this->oModele->listerChiffreAffaireParProfil());
    }

    public function genererChiffreAffaireTotal(){
        echo json_encode($this->oModele->listerChiffreAffaire());
    }

    public function genererMeilleurVentes(){
        echo json_encode($this->oModele->listerMeilleursVentes());
    }
}
