<?php
class ClientControleur{


    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new ClientModele($parametre);

        $this->oVue = new ClientVue($parametre);
    }

    public function lister(){

        $clients = $this->oModele->getListeClients();

        $this->oVue->genererAffichageListe($clients);

    }

    public function form_consulter(){

        $client = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($client);
    }

    public function form_ajouter(){

        $this->oVue->genererAffichageAjoutFiche();
    }

    public function form_valider_ajout(){
        echo 'E';
        $this->oModele->ajouterUnClient();
    }

    public function form_valider_modification(){
        $this->oModele->modifierUnClient();
    }

    public function form_modifier(){

        $client = $this->oModele->getUnClient();
        $this->oVue->genererAffichageModificationFiche($client);
    }

    public function form_valider_suppression()
    {
        $this->oModele->supprimerUnClient();
    }

    public function form_supprimer(){
        $client = $this->oModele->getUnClient();

        $this->oVue->genererAffichageSuppressionFiche($client);
    }
}
