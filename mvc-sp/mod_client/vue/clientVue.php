<?php
class ClientVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau

    private $tpl; // objet de type Smarty (Moteur de templates)


    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs(){


        $this->tpl->assign('login', 'Ici le nom de la personne authentifiée');

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

    }


    public function genererAffichageListe($clients){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste des Clients');

        $this->tpl->assign('listeClients', $clients);

        $this->tpl->display('mod_client/vue/clientListeVue.tpl');

    }


    public function genererAffichageFiche($client){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche client : Consultation');

        $this->tpl->assign('unClient', $client);

        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');

    }

    public function genererAffichageModificationFiche($client){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche client : Modification');

        $this->tpl->assign('unClient', $client);

        $this->tpl->display('mod_client/vue/clientModificationFicheVue.tpl');

    }

    public function genererAffichageAjoutFiche(){
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Fiche client : Ajouter');
        $this->tpl->display('mod_client/vue/clientAjouterVue.tpl');
    }

    public function genererAffichageSuppressionFiche($client){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche client : Suppression');

        $this->tpl->assign('unClient', $client);

        $this->tpl->display('mod_client/vue/clientSupprimerVue.tpl');
    }
}