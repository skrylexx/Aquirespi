<?php
require_once('require/bdd/config.php');
require('readphp_traitement.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/styleRead.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <title>AquiRespi.org</title>
</head>

<body>
    <header>
                            <!--<div class="divLogo">
                                <img class="logo" src="assets/img/logo-aquirespi.png" alt="Logo AquiRespi">
                            </div>

                            <div class="retour">
                                <span class="back"><a href="index.php">retour</a></span>
                            </div>-->

        <nav>
            <ul>
                <li class="menu-deroulant">
                    <a href="patients-et-proches.html">Patients et proches</a>
                    <ul class="sous-menu">
                        <li><a href="informations.php">Informations</a></li>
                        <li><a href="annuaire.php">Annuaires</a></li>
                        <li><a href="parcours-soins.php">Parcours de soins</a></li>
                        <li><a href="depistage.php">Dépistage</a></li>
                    </ul>
                </li>

                <li class="menu-deroulant">
                    <a href="#">Professionnels de santé</a>
                    <ul class="sous-menu">
                        <li><a href="#"> Appui aux professionnels de santé</a></li>
                        <li><a href="#">Recommandations et guides bonnes pratiques</a></li>
                        <li><a href="#">Fiches réflexes</a></li>
                        <li><a href="#">Formations</a></li>
                        <li><a href="pneumopediatrie.php">Pneumopédiatrie</a></li>
                        <li><a href="pneumo_adulte.php">Pneumologie adulte</a></li>
                        <li><a href="#">Devenir membre</a></li>
                    </ul>
                </li>

                <li class="menu-deroulant">
                    <a href="aquirespi.org">AquiRespi</a>
                    <ul class="sous-menu">
                        <li><a href="reseau-aquirespi.php">Le réseau</a></li>
                        <li><a href="acteurs-aquirespi.php">Les acteurs</a></li>
                    </ul>
                </li>

                <li class="menu-deroulant">
                    <a href="#">Télémédecine</a>
                    <ul class="sous-menu">
                        <li><a href="#">Le projet</a></li>
                        <li><a href="#">Ses acteurs</a></li>
                        <li><a href="#">Le résultat</a></li>
                        <li><a href="#">Demande d'inclusion</a></li>
                    </ul>
                </li>

                </ul>
          </nav>

    </header>

    <main>

        <section class="retour">
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="blue"><span class="class font">Retour</span></a>
        </section>
    
        <section class="mainSection">
            <div class="divTitre">
                <?php echo "<h2><p class=pTitre>".$articles['titre']."</p>"?>
            </div>
            <article>
                <?php echo "<p class=pContenu>".$articles['contenu']."</p>"?>
            </article>
        </section>
    </main>

    <footer>
        <div class="divGauche">
            <p class="prez">AquiRespi</p>
                <span class="gauche"><a class="white" href="#">&#x1F5F6; Nous contacter</a></span><br>
                <span class="gauche"><a class="white" href="#">&#x1F5F6; Nous découvrir</a></span><br>
                <span class="gauche"><a class="white" href="#">&#x1F5F6; Nos partenaires</a></span><br>
        </div>

        <div class="divDroite">
            <p class="prez">Conditions</p>
                <span class="droite"><a class="white" href="#">&#x1F5F6; Informations légales</a></span>
        </div>
    </footer>
<body>
</html>