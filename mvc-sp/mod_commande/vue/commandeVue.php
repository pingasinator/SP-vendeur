<?php

class CommandeVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau

    private $tpl; // objet de type Smarty (Moteur de templates)


    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs()
    {

        $this->tpl->assign('login', $_COOKIE['login']);

    }

    public function genererAffichageModificationFiche($commande)
    {
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche profil : Modification');

        $this->tpl->assign('uneCommande', $commande);

        $this->tpl->assign('errorMessage', Commande::getErrorMessage());

        $this->tpl->display('mod_commande/vue/commandeFicheVue.tpl');

        echo Commande::getErrorMessage();
    }

    public function genererAffichageListe($commandes){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste commandes');

        $this->tpl->assign('listeCommmandes', $commandes);

        $this->tpl->assign('errorMessage', Commande::getErrorMessage());

        $this->tpl->assign('messageSuccess', Commande::getSuccessMessage());

        $this->tpl->display('mod_commande/vue/commandeListeVue.tpl');
    }
}