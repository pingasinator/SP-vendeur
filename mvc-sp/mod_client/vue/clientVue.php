<?php
class ClientVue
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


    }


    public function genererAffichageListe($clients){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Liste des Clients');

        $this->tpl->assign('listeClients', $clients);

        $this->tpl->assign('messageErreur', ClientTable::getMessageErreur());

        $this->tpl->assign('messageSuccess', ClientTable::getMessageSuccess());

        $this->tpl->display('mod_client/vue/clientListeVue.tpl');

    }


    public function genererAffichageFiche($client){

        $this->chargementValeurs();

        switch($this->parametre['action']){
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
        $this->tpl->assign('messageSuccess', $client->getMessageSuccess());

        $this->tpl->assign('action', $this->parametre['action']);

        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');
    }
}