<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['activite'])){
        echo '<meta http-equiv="refresh" content="2; url=index.php" />';
    }
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vue/bootstrap.css">
    <link rel="stylesheet" href="vue/style.css">
    <title>GSB - Accueil</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12 col-sm-1">
                <nav>
                    <ul class="no-point">
                        <li><strong><a href="index.php?action=LiMed">Liste&nbspdes&nbspmédicaments</a></strong></li>
                        <li><strong><a href="index.php?action=LiAct">Liste&nbspdes&nbspactivités</a></strong></li>
                        <li><strong><a href="index.php?action=MeJur">Mentions&nbspjuridiques</a></strong></li>
                    </ul>
                </nav>
            </div>
        </div>     
        <div class="row">
            <div class="col-12 background-scientist">             
            </div>
            <div class="col-lg-10 col-sm-12 logo-text">
                <a href="index.php">
                    <img src="vue/images/logo-gsb.png" alt="logo_gsb">
                </a>
                <br><br>
                <?php 
                    if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['activite'])){
                        echo '
                        <div style="background-color: rgba(0, 0, 0, .5);">
                            <p style="font-size:large; color:lightgray;">Votre inscription à bien été prise en compte.</p>
                        </div>
                        ';
                    };
                ?>
                <h1 style="color: white;"><strong>Bienvenue !</strong></h1>
                <br>
                <div style="background-color: rgba(0, 0, 0, .5);">
                    <p style="font-size:xx-large; color:lightgray;"><strong>Le laboratoire GSB (Galaxy Swiss Bourdin) est une entreprise pharmaceutique permettant de voir les informations sur les médicaments plus en détail qui vous aidera à apprendre les initiatives nécessaires. Enfin nous montrons les différentes activités sur notre site que ce soit les vidéoconférences ou autres, vous pouvez aussi y participer en vous inscrivant dans le formulaire d’inscription.</strong></p>
                </div>
                <footer>
                    <p>© Site web proposé par Maxime Dussort et Nicolas Kerpaal</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
