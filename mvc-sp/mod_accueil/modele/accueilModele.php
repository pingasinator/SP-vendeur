<?php
class AccueilModele extends Modele
{
    private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    public function listerChiffreAffaireParProfil(){

        $sql = "SELECT MONTH(date_livraison) as mois, SUM(total_ht) as total FROM commande INNER JOIN vendeur ON vendeur.codev = commande.codev WHERE vendeur.login = ? AND date_livraison IS NOT NULL GROUP BY MONTH(date_livraison) ";

        $idRequete = $this->ExecuteRequete($sql, [$_SESSION['login']]);

        $chiffreAffaire = [
            [ "mois" => "Janvier", "total" => 0],
            [ "mois" => "Fevrier", "total" => 0],
            [ "mois" => "Mars", "total" => 0],
            [ "mois" => "Avril", "total" => 0],
            [ "mois" => "Mai", "total" => 0],
            [ "mois" => "Juin", "total" => 0],
            [ "mois" => "Juillet", "total" => 0],
            [ "mois" => "Aout", "total" => 0],
            [ "mois" => "Septembre", "total" => 0],
            [ "mois" => "Octobre", "total" => 0],
            [ "mois" => "Novembre", "total" => 0],
            [ "mois" => "Decembre", "total" => 0]
        ];

        if($idRequete->rowCount() > 0) {

            while ($chiffre = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $chiffreAffaire[$chiffre['mois'] - 1]['total'] = $chiffre['total'];
            }
        }

         return $chiffreAffaire;

    }

    public function listerChiffreAffaire(){

        $sql = "SELECT MONTH(date_livraison) as mois, SUM(total_ht) as total FROM commande INNER JOIN vendeur ON vendeur.codev = commande.codev WHERE date_livraison IS NOT NULL GROUP BY MONTH(date_livraison) ";

        $idRequete = $this->ExecuteRequete($sql, []);

        $chiffreAffaire = [];

        $chiffreAffaire = [
            [ "mois" => "Janvier", "total" => 0],
            [ "mois" => "Fevrier", "total" => 0],
            [ "mois" => "Mars", "total" => 0],
            [ "mois" => "Avril", "total" => 0],
            [ "mois" => "Mai", "total" => 0],
            [ "mois" => "Juin", "total" => 0],
            [ "mois" => "Juillet", "total" => 0],
            [ "mois" => "Aout", "total" => 0],
            [ "mois" => "Septembre", "total" => 0],
            [ "mois" => "Octobre", "total" => 0],
            [ "mois" => "Novembre", "total" => 0],
            [ "mois" => "Decembre", "total" => 0]
        ];

        if($idRequete->rowCount() > 0) {

            while ($chiffre = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $chiffreAffaire[$chiffre['mois'] - 1 ]['total'] = $chiffre['total'];
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
