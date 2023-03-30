<!DOCTYPE html>
<html lang="fr">
<head>
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
                <h1 style="color: white;"><strong>Liste des activités</strong></h1>
                <br>
                <table style="text-align: start;">
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date et Heure</th>
                    </tr>
                    <tr>
                        <?php
                            $bdActivite = returnActivites();
                            $tab=array();
                            foreach($bdActivite as $uneActivite){
                                for($i=0;$i<5;$i++){
                                    $tab[$i] = explode(";", $uneActivite);
                                }
                        ?>
                            <td><?php echo $tab[0][1]?></td>
                            <td><?php echo $tab[0][2]?></td>
                            <td><?php echo $tab[0][3]?></td>
                        <?php echo "</tr>";
                        };?>
                </table>
                <br>
                <table style="text-align: start;">
                    <tr>
                        <th>
                            <h5>Inscription à une activité :</h5>
                            <form action="index.php?action=AJO" method="post">
                                <p>Nom: <input type="text" name="nom" required/></p>
                                <p>Prénom: <input type="text" name="prenom" required/></p>
                                <p>Mail: <input type="email" name="mail" required/></p>
                                <p>Activité: <select name="activite" required>
                                    <option value="">Selectionnez une activité</option>
                                    <?php 
                                        $tab = array();
                                        foreach($bdActivite as $uneActivite){
                                            $tab[] = explode(";", $uneActivite);
                                        }
                                        foreach ($tab as $uneLigne) {
                                            echo '<option value="' . $uneLigne[0] . '">' . $uneLigne[1] . '</option>';
                                        }
                                    ?> 
                                </select></p>
                                <input type="submit" />
                            </form>
                        </th>
                    </tr>
                </table>
                <footer>
                    <p>© Site web proposé par Maxime Dussort et Nicolas Kerpaal</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
