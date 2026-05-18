<?php

/**
 * Class AccueilVue
 * Classe gérant le mappage php <=> html à l'aide PROCHAINEMENT (!!) du moteur de template smarty
 */
class AccueilVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau


    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $titrePrincipal = "GOURMANDISE SARL";

        // Prendre le fichier index.html du template modèle et le lancer
        require_once('mod_accueil/vue/accueilVue.tpl');
    }
}
