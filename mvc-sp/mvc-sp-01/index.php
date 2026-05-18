<?php
require_once 'include/configuration.php';

if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'accueil';

}

//Appel du routeur concerné par la gestion entrante
require_once 'mod_'. $_REQUEST['gestion'] .'/'.$_REQUEST['gestion'].'.php';

// Création d'un objet, instance du routeur appelé
$oRouteur = new $_REQUEST['gestion']($_REQUEST);


