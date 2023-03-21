<?php
    // inclusion du modèle
    require_once "modele/ModeleActivite.php";
    require_once "modele/ModeleMedicament.php";

    // inclusion des fonctions contrôleurs
    require_once "controle/Controle.php";

     // lancement du bon contrôleur
     if ( !isset($_GET["action"]) ){
        chargementVuePrincipale();
     }else if( $_GET["action"] == 'LiMed'){
         chargementVueMedocs();
     };
?>