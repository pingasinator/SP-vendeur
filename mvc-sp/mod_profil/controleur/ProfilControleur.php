<?php
class ProfilControleur
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new ProfilModele($parametre);

        $this->oVue = new ProfilVue($parametre);
    }

    public function form_modifier()
    {
        $profil = $this->oModele->getUnProfil();

        $this->oVue->genererAffichageModificationFiche($profil);
    }

    public function form_valider_modification()
    {
        $this->oModele->modifierUnProfil();
    }

    public function form_authentification(){
        $this->oVue->genererAffichageAuthentificationFiche();
    }

    public function form_valider_authentification(){
        $profil = $this->oModele->getLoginProfil();
        if(!$profil){
            $this->oVue->genererAffichageAuthentificationFiche();
        }else{
            if($profil['motdepasse'] === $_POST['password']){
                setcookie('login', $profil['login'], time() + 3600);
                header('Location: index.php');
                die();
            }
        }
    }
}
