<?php
class ProduitVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau

    private $tpl; // objet de type Smarty (Moteur de templates)


    public function __construct($parametre){
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs(){


        $this->tpl->assign('login', $_SESSION['login']);

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

    }


    public function genererAffichageListe($produits){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste des Produits');

        $this->tpl->assign('listeProduits', $produits);

        $this->tpl->display('mod_produit/vue/produitListeVue.tpl');

    }


    public function genererAffichageFiche($produit){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche produit : Consultation');

        $this->tpl->assign('unProduit', $produit);

        $this->tpl->display('mod_produit/vue/produitFicheVue.tpl');

    }

    public function genererAffichageSuppressionFiche($produit)
    {
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche produit : Suppression');

        $this->tpl->assign('unProduit', $produit);

        $this->tpl->display('mod_produit/vue/produitSuppressionFicheVue.tpl');
    }

    public function genererAffichageAjoutFiche(){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche produit : Ajouter');

        $this->tpl->display('mod_produit/vue/produitAjoutFicheVue.tpl');
    }
}