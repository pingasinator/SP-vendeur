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

        $sql = "SELECT vendeur.*, cast(sum(commande.total_ht) as DECIMAL(10,2)) as ventes FROM vendeur left join commande on commande.codev = vendeur.codev WHERE login = ?";

        $idRequete = $this->executeRequete($sql, [$_SESSION['login']]);

        $data = $idRequete->fetch(PDO::FETCH_ASSOC);



        // Retourner le profil ... Un objet de type ProfilTable
        // $profilTableauAssociatif = $idRequete->fetch(PDO::FETCH_ASSOC);
        // $profilObjet = new ProfilTable($profilTableauAssociatif);
        // return $profilObjet;
        // Manière plus synthétique
        return new ProfilTable($data);
    }



    public function modifierUnProfil(){
        $newProfil = new ProfilTable($_POST);
        $sql = "UPDATE vendeur SET nom = ?, prenom = ?, telephone = ?, adresse = ?, ville = ?, cp = ? WHERE codev = ?";
        $this->executeRequete($sql, [$newProfil->getNom(),$newProfil->getPrenom(),$newProfil->getTelephone(),$newProfil->getAdresse(),$newProfil->getVille(),$newProfil->getCP(),$newProfil->getCodev()]);
    }

    public function checkPassword(){
        $sql = "SELECT motdepasse FROM vendeur WHERE login = ?";
        $idRequete = $this->executeRequete($sql, [$_SESSION['login']]);
        $res = $idRequete->fetch(PDO::FETCH_ASSOC);

        return $res['motdepasse'] === $this->hashPassword($_POST['password']);
    }

    public function modifierMotDePasse(){


        $passwd = $this->hashPassword($_POST['newPassword']);

        $sql = "UPDATE vendeur SET motdepasse = ? WHERE codev = ?";
        $this->executeRequete($sql, [$passwd,$_POST['codev']]);
    }

    public function hashPassword($password){
        $gauche = "ar30&y%";
        $droite = "tk!@";
        $hasedpasswd = hash('ripemd128', "$gauche$password$droite" );
        return $hasedpasswd;
    }

    public function getVentes()
    {
        $sql = "SELECT * FROM vendeur";
    }
}