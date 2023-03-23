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
?>