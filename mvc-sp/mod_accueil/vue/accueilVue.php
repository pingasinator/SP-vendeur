<?php

/**
 * Class AccueilVue
 * Classe gérant le mappage php <=> html à l'aide PROCHAINEMENT (!!) du moteur de template smarty
 */
class AccueilVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau

    private $tpl; // objet de type Smarty (Moteur de templates)


    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    public function genererAffichageListe(){

        $this->tpl->assign('login', 'Ici le nom de la personne authentifiée');

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');

    }



}
