<?php
class AuthentificationControleur{


    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau
    private $oVue; // Object

    private $oModele; //objet

    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->oModele = new AuthentificationModele($parametre);

        $this->oVue = new AuthentificationVue($parametre);
    }

    public function Authentifier(){
        $this->oVue->genererAffichageAuthentification();
    }

    public function valider_authentification(){
        $profil = $this->oModele->getLogin();

        $gauche = "ar30&y%";
        $droite = "tk!@";

        $passwd = $_POST['password'];

        $hasedpasswd = hash('ripemd128', "$gauche$passwd$droite" );



        if(!$profil){
            Authentification::setErrorMessage("Login incorrecte");
            $this->oVue->genererAffichageAuthentification();

        }else{
            if($hasedpasswd ===  $profil['motdepasse']){
                $_SESSION['login'] = $profil['login'];
                header('Location: index.php');
                die();
            }

            Authentification::setErrorMessage("Mot de passe incorrect");
            $this->oVue->genererAffichageAuthentification();
        }
    }
}
