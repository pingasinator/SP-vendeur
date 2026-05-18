<?php
class ProduitModele extends Modele
{

 private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    /**
     * @return array|null
     */
    public function getListeProduits(){

        $sql = "SELECT * FROM produit";

        $idRequete = $this->executeRequete($sql);

        // Retourner le tableau d'objets
        if($idRequete->rowCount() > 0){

            while($produit = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $produits[] = new ProduitTable($produit);
            }

            return $produits;

        }else{

            return null;
        }

    }


    /**
     * @return ProduitTable
     */
    public function getUnProduit(){

        $sql = "SELECT * FROM produit WHERE reference = ?";

        $idRequete = $this->executeRequete($sql, [$this->parametre['reference']]);

        // Retourner le produit ... Un objet de type ProduitTable
        // $produitTableauAssociatif = $idRequete->fetch(PDO::FETCH_ASSOC);
        // $produitObjet = new ProduitTable($produitTableauAssociatif);
        // return $produitObjet;
        // Manière plus synthétique
        return new ProduitTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }
}