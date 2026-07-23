<?php
class AccueilModele extends Modele
{
    private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    public function listerChiffreAffaireParProfil(){

        $sql = "SELECT MONTH(date_livraison) as mois, SUM(total_ht) as total FROM commande INNER JOIN vendeur ON vendeur.codev = commande.codev WHERE vendeur.login = ? GROUP BY MONTH(date_livraison) ";

        $idRequete = $this->ExecuteRequete($sql, [$_SESSION['login']]);

        $chiffreAffaire = [];

        $mois = [
            "Janvier",
            "Fevrier",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Aout",
            "Septembre",
            "Octobre",
            "Novembre",
            "Decembre"
        ];

        for($i = 0; $i < count($mois); $i++){
            $chiffreAffaire[] = array("mois" => $mois[$i], "total" => 0);
        }

        if($idRequete->rowCount() > 0) {

            while ($chiffre = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $chiffreAffaire[$chiffre['mois']]['total'] = $chiffre['total'];
            }
        }

         return $chiffreAffaire;

    }

    public function listerChiffreAffaire(){

        $sql = "SELECT MONTH(date_livraison) as mois, SUM(total_ht) as total FROM commande INNER JOIN vendeur ON vendeur.codev = commande.codev WHERE 1 GROUP BY MONTH(date_livraison) ";

        $idRequete = $this->ExecuteRequete($sql, []);

        $chiffreAffaire = [];

        $mois = [
            "Janvier",
            "Fevrier",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Aout",
            "Septembre",
            "Octobre",
            "Novembre",
            "Decembre"
        ];

        for($i = 0; $i < count($mois); $i++){
            $chiffreAffaire[] = array("mois" => $mois[$i], "total" => 0);
        }

        if($idRequete->rowCount() > 0) {

            while ($chiffre = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $chiffreAffaire[$chiffre['mois']]['total'] = $chiffre['total'];
            }
        }

        return $chiffreAffaire;
    }

    public function listerMeilleursVentes(){

        $sql = "SELECT COUNT(ligne_commande.numero) as count, produit.designation FROM `ligne_commande` INNER JOIN produit ON produit.reference = ligne_commande.reference WHERE 1 GROUP BY produit.reference ORDER BY count DESC  LIMIT 5";

        $idRequete = $this->ExecuteRequete($sql, []);

        $meilleursVentes = [];

        if($idRequete->rowCount() > 0) {
            while ($ligne = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $meilleursVentes[] = $ligne;
            }
        }

        return $meilleursVentes;
    }
}
