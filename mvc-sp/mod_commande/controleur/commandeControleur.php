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

    public function form_ajouter(){

        $produits = $this->oModele->getProduits();
        $this->oVue->genererAffichageCommande($produits);
    }

    public function form_ajouter_panier(){

        $this->oModele->ajouterProduit();
        $this->form_consulter_panier();
    }

    public function form_modifier_commande(){

        $content = array(
            "Mode" => "Modifier",
            "commande" => $this->oModele->getUneCommande($this->parametre['numero']),
            "lignes" => $this->oModele->getLignesCommande($this->parametre['numero'])
        );

        $this->oVue->genererAffichageFiche($content);
    }

    public function form_modifier_ligne_commande(){

        $this->oModele->modifierLigneCommande($this->parametre['numero'],$this->parametre['numeroLigne'],$this->parametre['quantite']);

        $content = array(
            "Mode" => "Modifier",
            "commande" => $this->oModele->getUneCommande($this->parametre['numero']),
            "lignes" => $this->oModele->getLignesCommande($this->parametre['numero'])
        );

        $this->oVue->genererAffichageFiche($content);
    }
    public function form_consulter_commande(){

        $content = array(
            "Mode" => "Consulter",
            "commande" => $this->oModele->getUneCommande($this->parametre['numero']),
            "lignes" => $this->oModele->getLignesCommande($this->parametre['numero'])
        );

        $this->oVue->genererAffichageFiche($content);
    }

    public function form_supprimer_ligne_panier(){
        $this->oModele->supprimerLignePanier($_POST['numeroLigne']);
        $this->form_consulter_panier();
    }

    public function form_modifier_ligne_panier(){

        $tmp = $_SESSION['panier'][$_POST['numeroLigne'] - 1];

        $tmp->setQuantite($_POST['quantite']);
        $tmp->setPrixTotal($_POST['quantite'] * $tmp->getPrixVente());

        $_SESSION['panier'][$_POST['numeroLigne'] - 1] = $tmp;

        $content = array(
            "Mode" => "Modifier",
            "panier" => $_SESSION['panier']
        );

        $this->oVue->genererAffichagePanier($content);
    }

    public function form_enregistrement_panier(){
        $content = array(
            "Mode" => "Enregistrer",
            "lignes" => $_SESSION['panier'],
            "clients" => $this->oModele->getClients(),
            "vendeur" => $this->oModele->getVendeur(),
        );

        $this->oVue->genererAffichageFiche($content);
    }

    public function form_valider_enregistrement_panier()
    {
        $this->oModele->enregistrerCommande();
        Commande::setSuccessMessage("Commande enregistrée");
        $this->form_vider_panier();
    }
    public function form_vider_panier(){
        $_SESSION['panier'] = array();
        $commandes = $this->oModele->getListeCommande();
        $this->oVue->genererAffichageListe($commandes);
    }

    public function form_consulter_panier(){
        $content = array(
            "Mode" => "Consulter",
            "panier" => $_SESSION['panier']
        );

        $this->oVue->genererAffichagePanier($content);
    }
}
