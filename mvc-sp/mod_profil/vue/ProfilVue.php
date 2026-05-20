<?php

class ProfilVue
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


        $this->tpl->assign('login', 'Ici le nom de la personne authentifiée');

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

    }

    public function genererAffichageModificationFiche($profil)
    {
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche profil : Modification');

        $this->tpl->assign('unProfil', $profil);

        $this->tpl->display('mod_profil/vue/profilModificationFicheVue.tpl');
    }
}