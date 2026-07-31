<?php
class CommandeModele extends Modele
{

 private $parametre = []; //Tableau = $_REQUEST

    function __construct($parametre){

        $this->parametre = $parametre;

    }

    /**
     * @return CommandeTable
     */
    public function getUneCommande($numero){

        $sql = "SELECT commande.*, client.nom as client, vendeur.nom as vendeur FROM commande LEFT JOIN client ON client.codec = commande.codec LEFT JOIN vendeur ON vendeur.codev = commande.codev WHERE numero = ?";

        $idRequete = $this->executeRequete($sql, [$numero]);

        $data = $idRequete->fetch(PDO::FETCH_ASSOC);

        return new CommandeTable($data);
    }

    public function getUnClient($codec){
        $sql = "SELECT * FROM client WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$codec]);
        $data = $idRequete->fetch(PDO::FETCH_ASSOC);
        return new ClientTable($data);
    }

    public function getProduits(){

        $sql = "SELECT * FROM produit";

        $idRequete = $this->executeRequete($sql);

        if($idRequete->rowCount() > 0){
            while($produit = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $produits[] = new ProduitTable($produit);
            }

            return $produits;
        }


        return null;
    }

    public function getUnProduit($reference){
        $sql = "SELECT * FROM produit WHERE reference = ?";
        $idRequete = $this->executeRequete($sql, [$reference]);
        $data = $idRequete->fetch(PDO::FETCH_ASSOC);
        return new ProduitTable($data);
    }

    public function getListeCommande(){

        $sql = "SELECT *, concat(vendeur.nom,' ',vendeur.prenom) as vendeur, client.nom as client FROM commande left join vendeur on vendeur.codev = commande.codev left join client on client.codec = commande.codec";

        $idRequete = $this->executeRequete($sql);

        // Retourner le tableau d'objets
        if($idRequete->rowCount() > 0){

            while($commande = $idRequete->fetch(PDO::FETCH_ASSOC)){

                $commandes[] = new CommandeTable($commande);
            }

            return $commandes;

        }else{
            return null;
        }
    }

    public function getLignesCommande($numero){
        $sql = "SELECT numero_ligne as numeroLigne, ligne_commande.reference, produit.designation as designation, quantite_demandee as quantite, produit.prix_unitaire_HT * 1.36 as prixVente FROM ligne_commande LEFT JOIN produit ON produit.reference = ligne_commande.reference WHERE numero = ?";
        $idRequete = $this->executeRequete($sql, [$numero]);
        $ligneCommandes = array();
        if($idRequete->rowCount() > 0){
            while($ligne = $idRequete->fetch(PDO::FETCH_ASSOC)){
                $ligneCommandes[] = new LigneCommandeTable($ligne);
            }
        }

        return $ligneCommandes;
    }

    public function getUneLigneCommande($numero,$numeroLigne){
        $sql = "SELECT * FROM ligne_commande WHERE numero = ? AND numero_ligne = ?";
        $idRequete = $this->executeRequete($sql, [$numero,$numeroLigne]);
        $data = $idRequete->fetch(PDO::FETCH_ASSOC);
        return new LigneCommandeTable($data);
    }

    public function modifierLigneCommande($numero,$numeroLigne,$quantite){
        $sql = "UPDATE ligne_commande SET quantite_demandee = ? WHERE numero = ? AND numero_ligne = ?";
        $this->executeRequete($sql, [$quantite,$numero,$numeroLigne]);
    }

    public function ajouterProduit(){

        if($_POST['quantite'] != "" && intval($_POST['quantite']) > 0){
            $_SESSION['panier'][] = new LigneCommandeTable($_POST);
        }

        for($i = 0; $i < count($_SESSION['panier']); $i++){
            $_SESSION['panier'][$i]->setNumeroLigne($i +1);
        }
    }

    public function getClients()
    {
        $sql = "SELECT * FROM client";
        $idRequete = $this->executeRequete($sql);

        $clients = [];

        if($idRequete->rowCount() > 0){
            while($client = $idRequete->fetch(PDO::FETCH_ASSOC)){
                $clients[] = new ClientTable($client);
            }
        }

        return $clients;
    }

    public function getVendeur(){
        $sql = "SELECT * FROM vendeur WHERE login = ?";
        $idRequete = $this->executeRequete($sql,[$_SESSION['login']]);
        $vendeur = new ProfilTable($idRequete->fetch(PDO::FETCH_ASSOC));
        return $vendeur;
    }

    public function enregistrerCommande(){

        $commande = new CommandeTable($_POST);
        $sql = "INSERT INTO commande (codec,codev,total_ht,total_tva,date_commande) VALUES (?,?,?,?,?)";

        $date = DateTime::createFromFormat('d/m/Y', $commande->getDate_commande());

        $idRequete = $this->executeRequete($sql,[$commande->getCodec(),$commande->getCodev(),$commande->getTotal_HT(),$commande->getTotal_Tva(),$date->format('Y-m-d H:i:s')]);

        $sql = "SELECT numero FROM `commande` WHERE 1 ORDER BY numero DESC LIMIT 1";
        $idRequete = $this->executeRequete($sql);
        $result = $idRequete->fetch(PDO::FETCH_ASSOC);
        $numero = $result['numero'];

        $num_ligne = 1;
        foreach($_SESSION['panier'] as $ligne){
            $sql = "INSERT INTO ligne_commande (numero,numero_ligne,reference,quantite_demandee) VALUES(?,?,?,?)";
            $idRequete = $this->executeRequete($sql,[$numero,$ligne->getNumeroLigne(),$ligne->getReference(),$ligne->getQuantite()]);
        }
    }

    public function supprimerLignePanier($numero){
        array_splice($_SESSION['panier'],$numero - 1,1);
        $this->rechargerPanier();
    }

    public function rechargerPanier(){

        $i = 1;
        foreach($_SESSION['panier'] as $ligne){
            $ligne->setNumeroLigne($i);
            $i++;
        }
    }
}