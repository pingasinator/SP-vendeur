<?php


class Profil
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = []; //tableau
    private $oControleur; // Object

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé

        // Création d'une instance de la classe ProfilControleur
        $this->oControleur = new ProfilControleur($parametre);
    }


    public function choixAction()
    {

        // Méthode par défaut si aucune action n'est spécifiée
        if(isset($_POST['action']) && $_POST['action'] == 'form_valider_mofication'){
            $this->oControleur->form_valider_modification();
        }

        $this->oControleur->form_modifier();
    }


}
