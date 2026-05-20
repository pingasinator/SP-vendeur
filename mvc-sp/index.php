<?php
//Chargement global
require_once 'include/configuration.php';

Autoloader::chargerClasses();

// Traitement : choix du module
if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'accueil';

}

// Vérification de l'utilisateur
if(!isset($_COOKIE['login'])){
    $_REQUEST['gestion'] = 'profil';
    if(isset($_POST['action']))
    {
        $_POST['action'] = ($_POST['action'] == 'form_valider_login' ? $_POST['action'] : null);
    }
}

// Déconnexion de l'utilisateur
if(isset($_GET['deconnexion'])){
    setcookie('login', '', time() - 3600);
    header('Location: index.php');
    die();
}

//Appel du routeur concerné par la gestion entrante
// C'est l'autoloader qui se charge de =>
// require_once 'mod_'. $_REQUEST['gestion'] .'/'.$_REQUEST['gestion'].'.php';

// Création d'un objet, instance du routeur appelé
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();


