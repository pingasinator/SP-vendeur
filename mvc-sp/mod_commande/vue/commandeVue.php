<?php

class CommandeVue
{
    //Propriété récupérant les paramètres ($_REQUEST fichier index)
    private $parametre = array(); //tableau

    private $tpl; // objet de type Smarty (Moteur de templates)


    public function __construct($parametre)
    {
        // initialisation de la propriété $parametre
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    private function chargementValeurs()
    {

        $this->tpl->assign('login', $_SESSION['login']);

        $this->tpl->assign('errorMessage', Commande::getErrorMessage());

        $this->tpl->assign('messageSuccess', Commande::getSuccessMessage());

    }

    public function genererAffichageFiche($content)
    {
        $this->chargementValeurs();

        $totaleCommande = 0;
        $totaleHT = 0;
        foreach ($content['lignes'] as $ligne){
            $totaleCommande += $ligne->getPrixTotal();
            $totaleHT += $ligne->getPrixUnitaireHT() * $ligne->getQuantite();
        }

        $this->tpl->assign('titrePage', 'commande');

        $this->tpl->assign('Mode', $content["Mode"]);



        $this->tpl->assign('Panier', $content['lignes']);

        if($content['Mode'] === "Enregistrer"){
            $this->tpl->assign('Clients', $content['clients']);
            $this->tpl->assign('vendeur', $content["vendeur"]);
            $this->tpl->assign('date', date("d/m/Y"));
        }else{
            $this->tpl->assign('commande', $content["commande"]);
        }

        $this->tpl->assign('totalCommande', $totaleCommande);

        $this->tpl->assign('totalTVA', $totaleCommande * 0.055);

        $this->tpl->assign('margeBrute', $totaleCommande - $totaleHT);

        $this->tpl->display('mod_commande/vue/commandeFicheEnregistrementVue.tpl');
    }

    public function genererAffichageListe($commandes){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste commandes');

        $this->tpl->assign('listeCommmandes', $commandes);

        $this->tpl->display('mod_commande/vue/commandeListeVue.tpl');
    }

    public function genererAffichageCommande($produits){
        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'commande');

        $this->tpl->assign('listeProduits', $produits);

        $this->tpl->assign('nbArticles',count($_SESSION['panier']));

        $totalHT = 0;
        foreach ($_SESSION['panier'] as $ligne) {
            $totalHT += $ligne->getPrixUnitaireHT() * $ligne->getQuantite();
        }

        $this->tpl->assign('totalHT',$totalHT);

        $this->tpl->display('mod_commande/vue/commandeListeProduitsVue.tpl');
    }

    public function genererAffichagePanier($content){
        $this->chargementValeurs();

        $totaleCommande = 0;
        $totaleHT = 0;
        foreach ($content['panier'] as $ligne){
            $totaleCommande += $ligne->getPrixTotal();
            $totaleHT += $ligne->getPrixUnitaireHT() * $ligne->getQuantite();
        }

        $this->tpl->assign('Mode', $content["Mode"]);

        $this->tpl->assign('titrePage', 'commande');

        $this->tpl->assign('Panier', $content['panier']);

        $this->tpl->assign('totalCommande', $totaleCommande);

        $this->tpl->assign('totalTVA', $totaleCommande * 0.055);

        $this->tpl->assign('margeBrute', $totaleCommande - $totaleHT);

        $this->tpl->display('mod_commande/vue/commandeFicheConsultationPanierVue.tpl');


    }

}