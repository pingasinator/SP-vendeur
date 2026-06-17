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

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

    }

    public function genererAffichageModificationFiche($profil)
    {
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche profil : Modification');

        $this->tpl->assign('unProfil', $profil);

        $this->tpl->assign('errorMessage', Profil::getErrorMessage());

        $this->tpl->display('mod_profil/vue/commandeModificationFicheVue.tpl');

        echo Profil::getErrorMessage();
    }

    public function genererAffichageListe($commandes){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste commandes');

        $this->tpl->assign('listeCommmandes', $commandes);

        $this->tpl->assign('errorMessage', "");

        $this->tpl->assign('messageSuccess', "");

        $this->tpl->display('mod_commande/vue/commandeListeVue.tpl');
    }
}