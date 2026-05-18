<?php

class Client
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = []; //tableau
    private $oControleur; // Object

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé

        // Création d'une instance de la classe ClientControleur
        $this->oControleur = new ClientControleur($parametre);
    }


    public function choixAction()
    {


        if (isset($this->parametre['action'])) {

            switch ($this->parametre['action']) {
                // ICI à venir une structure alternative de type switch()
                // traitant les différentes actions possibles
                case 'form_consulter' :
                    // Direction vers un formulaire en consultation
                    $this->oControleur->form_consulter();
                    break;


            }

        } else {

            // Méthode par défaut si aucune action n'est spécifiée
            $this->oControleur->lister();
        }


    }


}
