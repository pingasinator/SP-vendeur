<?php

class Produit
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = []; //tableau
    private $oControleur; // Object

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé

        // Création d'une instance de la classe ProduitControleur
        $this->oControleur = new ProduitControleur($parametre);
    }


    public function choixAction()
    {


        if (isset($this->parametre['action'])) {

            switch ($this->parametre['action']) {
                // ICI à venir une structure alternative de type switch()
                // traitant les différentes actions possibles
                case 'form_ajouter' :
                    // Direction vers un formulaire en consultation
                    $this->oControleur->form_ajouter();
                    break;

                case 'form_consulter' :
                    // Direction vers un formulaire en consultation
                    $this->oControleur->form_consulter();
                    break;

                case 'form_modifier':
                    // Direction vers un formulaire en modification
                    $this->oControleur->form_modifier();
                    break;

                case 'form_supprimer':
                    // Direction vers un formulaire en Suppression
                    $this->oControleur->form_supprimer();
                    break;


                case 'form_valider_mofication':
                        $this->oControleur->form_valider_modification();
                        $this->oControleur->form_consulter();
                        break;

                case 'form_valider_ajout':
                    $this->oControleur->form_valider_ajout();
                    $this->oControleur->lister();
                    break;

                case 'form_valider_suppression':
                    $this->oControleur->form_valider_suppression();
                    $this->oControleur->lister();
                    break;
            }

        } else {

            // Méthode par défaut si aucune action n'est spécifiée
            $this->oControleur->lister();
        }


    }


}
