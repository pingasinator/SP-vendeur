<?php
class Autoloader {



    public static function chargerClasses() {

        spl_autoload_register([__CLASS__,'autoload']);
    }

    public static function autoload($maClasse){
        // $maClasse accepte le nomde la class : Accueil, AccueilControleur, AccueilVue, ...

        // mettre en minuscule le nom de la classe passée en paramètre : $maClasse
        $maClasse = lcfirst($maClasse);

        // Charger dans une variable de type tableau la liste des réperoires où des classes sont existantes
        $repertoires = [
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_client/',
            'mod_client/controleur/',
            'mod_client/modele/',
            'mod_client/vue/',
        ];

        foreach ($repertoires as $repertoire) {

            // Vérifier si un fichier .php existe dans les répertoires stockés
            // dans le tableau $repertoires ? Si oui, on l'enregistre
            if(file_exists($repertoire.$maClasse.'.php')){
                require_once $repertoire.$maClasse.'.php';
                return;
            }
        }


    }


}