<?php
class ProfilModele extends Modele
{

 private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    /**
     * @return ProfilTable
     */
    public function getUnProfil(){

        $sql = "SELECT * FROM vendeur WHERE login = ?";

        $idRequete = $this->executeRequete($sql, [$_COOKIE['login']]);

        // Retourner le profil ... Un objet de type ProfilTable
        // $profilTableauAssociatif = $idRequete->fetch(PDO::FETCH_ASSOC);
        // $profilObjet = new ProfilTable($profilTableauAssociatif);
        // return $profilObjet;
        // Manière plus synthétique
        return new ProfilTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }



    public function modifierUnProfil(){
        $newProfil = new ProfilTable($_POST);
        $sql = "UPDATE vendeur SET nom = ?, prenom = ?, telephone = ?, adresse = ?, ville = ?, cp = ? WHERE codev = ?";
        $this->executeRequete($sql, [$newProfil->getNom(),$newProfil->getPrenom(),$newProfil->getTelephone(),$newProfil->getAdresse(),$newProfil->getVille(),$newProfil->getCP(),$newProfil->getCodev()]);
    }

    public function modifierMotDePasse(){
        echo $_POST['newPassword'];
        $sql = "UPDATE vendeur SET motdepasse = ? WHERE codev = ?";
        $this->executeRequete($sql, [$_POST['newPassword'],$_POST['codev']]);
    }
}