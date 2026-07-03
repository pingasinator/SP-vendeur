<?php
class CommandeControleur
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new CommandeModele($parametre);

        $this->oVue = new CommandeVue($parametre);
    }

    public function Lister(){

        $commandes = $this->oModele->getListeCommande();

        $this->oVue->genererAffichageListe($commandes);
    }

    public function form_modifier()
    {
        $commande = $this->oModele->getUnProfil();

        $this->oVue->genererAffichageModificationFiche($commande);
    }
}
