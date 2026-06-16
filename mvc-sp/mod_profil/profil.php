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
        if(isset($this->parametre['action']))
        {
            switch($this->parametre['action'])
            {
                case 'form_valider_mofication':
                    $this->oControleur->form_valider_modification();
                    break;

                case 'form_modifier':
                    $this->oControleur->form_modifier();
                    break;

                case 'form_valider_login':
                    if($_POST['login'] !== '' && $_POST['password'] !== '')
                    {
                        $this->oControleur->form_valider_authentification();
                    }else{
                        $this->oControleur->form_authentification();
                    }
                    break;

                    case 'form_valider_modifier_mot_de_passe':
                        $this->oControleur->form_valider_modier_mot_de_passe();
                        break;
            }
        }else{
            $this->oControleur->form_authentification();
        }
    }


}
