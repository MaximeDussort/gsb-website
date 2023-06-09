<?php
    // inclusion du modèle
    require_once "modele/ModeleActivite.php";
    require_once "modele/ModeleMedicament.php";
    require_once "modele/ModeleFormulaire.php";

    // inclusion des fonctions contrôleurs
    require_once "controle/Controle.php";

     // lancement du bon contrôleur
     if ( !isset($_GET["action"]) ){
        chargementVuePrincipale();
     }else if( $_GET["action"] == 'LiMed'){
        chargementVueMedocs();
    }else if( $_GET["action"] == 'LiAct'){
        chargementVueActivite();
    }else if( $_GET["action"] == 'MeJur'){
        chargementVueMentionsJuridiques();
    }else if( $_GET["action"] == 'AJO'){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $activite = $_POST['activite'];
        ajoutInscription($nom, $prenom, $mail, $activite);
    }
?>