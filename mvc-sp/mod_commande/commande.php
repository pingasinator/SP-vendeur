<?php


class Commande
{

    //Propriété récupérant le tableau $_REQUEST
    private $parametre = []; //tableau
    private $oControleur; // Object

    private static $ErrorMessage;
    private static $SuccessMessage;

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;
        // Chargement du controleur associé

        // Création d'une instance de la classe ProfilControleur
        $this->oControleur = new CommandeControleur($parametre);
    }


    public function choixAction()
    {

        // Méthode par défaut si aucune action n'est spécifiée
        if(isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {
                case 'form_lister':
                    $this->oControleur->Lister();
                    break;

                case 'form_ajouter':
                    $this->oControleur->form_ajouter();
                    break;

                case 'form_consulter_commande':
                    $this->oControleur->form_consulter_commande();
                    break;

                case 'form_modifier_commande':
                    $this->oControleur->form_modifier_commande();
                    break;

                case 'form_modifier_ligne_commande':
                    $this->oControleur->form_modifier_ligne_commande();
                    break;

                case 'form_consulter_panier':
                    $this->oControleur->form_consulter_panier();
                    break;

                case 'form_modifier_ligne_panier':
                    $this->oControleur->form_modifier_ligne_panier();
                    break;

                case 'form_supprimer_ligne_panier':
                    $this->oControleur->form_supprimer_ligne_panier();
                    break;

                case 'form_ajouter_panier':
                    $this->oControleur->form_ajouter_panier();
                    break;

                case 'form_enregistrement_panier':
                    $this->oControleur->form_enregistrement_panier();
                    break;

                case 'form_valider_enregistrement_panier':
                    $this->oControleur->form_valider_enregistrement_panier();
                    break;

                case 'form_vider_panier':
                    $this->oControleur->form_vider_panier();
                    break;
            }
        }else{
            $this->oControleur->Lister();
        }
    }

    public static function getErrorMessage(){
        return self::$ErrorMessage;
    }

    public static function getSuccessMessage(){
        return self::$SuccessMessage;
    }

    public static function setErrorMessage($ErrorMessage){
        self::$ErrorMessage = $ErrorMessage;
    }

    public static function setSuccessMessage($SuccessMessage){
        self::$SuccessMessage = $SuccessMessage;
    }
}
