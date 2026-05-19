<?php
class ProduitControleur{


    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new ProduitModele($parametre);

        $this->oVue = new ProduitVue($parametre);
    }

    public function lister(){

        $produits = $this->oModele->getListeProduits();

        $this->oVue->genererAffichageListe($produits);

    }




    public function form_consulter(){

        $produits = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($produits);
    }

    public function form_modifier(){
        $produits = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageModificationFiche($produits);
    }

    public function form_valider_modification(){
        $this->oModele->modifierUnProduit();
    }
}
