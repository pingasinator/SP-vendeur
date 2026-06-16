<?php

class AuthentificationVue
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


        $this->tpl->assign('login', 'Ici le nom de la personne authentifiée');

        $this->tpl->assign('tabBord', 'ICI MON TABLEAU DE BORD CF. Olivier LASSERRE');

    }


    public function genererAffichageAuthentification()
    {

        $this->chargementValeurs();

        $this->tpl->assign('errorMessage', Authentification::getErrorMessage());

        $this->tpl->display('mod_authentification/vue/authentificationVue.tpl');

    }


    public function genererAffichageFiche($client)
    {

        $this->chargementValeurs();

        switch ($this->parametre['action']) {
            case 'form_consulter':
            case 'form_valider_modification':

                $this->parametre['action'] = 'form_consulter';

                $this->tpl->assign('titrePage', 'Fiche client : Consulter');

                $this->tpl->assign('unClient', $client);

                $this->tpl->assign('readonly', 'readonly');

                $this->tpl->assign('codecReadonly', 'readonly');

                break;

            case 'form_ajouter':
            case 'form_valider_ajout':

                $this->parametre['action'] = 'form_ajouter';
                $this->tpl->assign('titrePage', 'Fiche client : Créer');

                $this->tpl->assign('unClient', $client);

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('codecReadonly', 'readonly');

                break;

            case 'form_modifier':
                $this->tpl->assign('titrePage', 'Fiche client : Modifier');

                $this->tpl->assign('unClient', $client);

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('codecReadonly', 'readonly');

                break;

            case 'form_supprimer':
                $this->tpl->assign('titrePage', 'Fiche client : Suppression');

                $this->tpl->assign('unClient', $client);

                $this->tpl->assign('readonly', 'readonly');

                $this->tpl->assign('codecReadonly', 'readonly');
                break;
        }

        $this->tpl->assign('messageErreur', $client->getMessageErreur());

        $this->tpl->assign('action', $this->parametre['action']);

        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');
    }
}