<?php
//Chargement global
require_once 'include/configuration.php';

Autoloader::chargerClasses();

// Traitement : choix du module
if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'accueil';

}

//Appel du routeur concerné par la gestion entrante
// C'est l'autoloader qui se charge de =>
// require_once 'mod_'. $_REQUEST['gestion'] .'/'.$_REQUEST['gestion'].'.php';

// Création d'un objet, instance du routeur appelé
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();


