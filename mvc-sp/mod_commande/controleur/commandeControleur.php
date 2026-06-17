<?php
class CommandeControleur
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new CommandeModele($parametre);

        $this->oVue = new CommandeVue($parametre);
    }

    public function Lister(){

        $commandes = $this->oModele->getListeCommande();

        $this->oVue->genererAffichageListe($commandes);
    }

    public function form_modifier()
    {
        $profil = $this->oModele->getUnProfil();

        $this->oVue->genererAffichageModificationFiche($profil);
    }

    public function form_valider_modification()
    {
        $this->oModele->modifierUnProfil();
        $profil = $this->oModele->getUnProfil();
        $this->oVue->genererAffichageModificationFiche($profil);
    }

    public function form_valider_modier_mot_de_passe(){

        if($this->oModele->checkPassword()){
            if(empty($_POST['newPassword']) || empty($_POST['confirmNewPassword'])){
                Profil::setErrorMessage("Veuillez remplir tous les champs");
            }else{
                if($_POST['newPassword'] === $_POST['confirmNewPassword'] )
                {
                    $this->oModele->modifierMotDePasse();
                    header('Location: index.php');
                    die();
                }else{
                    Profil::setErrorMessage("Les mots de passe ne correspondent pas");
                }
            }

        }else{
            Profil::setErrorMessage("Mot de passe incorrect");
        }
        $this->form_modifier();
    }
}
