<?php 
    function chargementVuePrincipale(){
        require_once "vue/Accueil.php";
    }

    function chargementVueMedocs(){
        require_once "vue/ListMedicament.php";
    }

    function chargementVueActivite(){
        require_once "vue/ListActivite.php";
    }

    function chargementVueMentionsJuridiques(){
        require_once "vue/MentionsJuridiques.php";
    }
    
    function chargementActionFormulaire(){
        require_once "modele/ModeleFormulaire.php";
    }
    function ajoutInscription($nom, $prenom, $mail, $activite){
        insertInscript($nom, $prenom, $mail, $activite);
        require_once "vue/Accueil.php";
    }
?>