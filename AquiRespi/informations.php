<?php
require_once('require/bdd/config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/styleInfo.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi-vertical-cmjn.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta name="keywords" content="kiné, bordeaux, aquitaine, nouvelle-aquitaine, kiné garde, kinésithérapie, santé, medical, aquirespi, aquirespi.org, aquirespi.fr"/>
    <title>AquiRespi.org</title>
</head>

<body>
    <header>
    <nav>
            <ul>
                <li class="menu-deroulant">
                    <a href="#">Patients et proches</a>
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
                    <a href="#">AquiRespi</a>
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
    <div class="divRetour"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="blue"><span class="class font">Retour</span></a></div>
            <section class="sectionEnfants">
                <h2>Information chez l'enfant</h2>
                <ul class="ulLiens">
                    <li class="liste"><a href="#"><span class="bleu">Bronchiolite</a></li>
                    <li class="liste"><a href="#">Asthme</a></li>
                    <li><a href="#"><span class="orange">Mucoviscidose</a></li>
                </ul>
            </section>
<hr class="hrMain">
            <section class="sectionAdultes">
                <h2>Information chez l'adulte</h2>
                    <ul class="ulLiens">
                        <li class="liste"><a href="#"><span class="vert">BPCO</a></li>
                        <li class="liste"><a href="#">Asthme</a></li>
                        <li class="liste"><a href="#">Covid</a></li>
                        <li><a href="#">Apnée du sommeil</a></li>
                    </ul>
            </section>
</main>

          <footer>

        <div class="divGauche">
            <p class="prez">AquiRespi</p>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=70">&#x1F5F6 Nous contacter</a></span><br>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=69">&#x1F5F6 Nous découvrir</a></span><br>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=71">&#x1F5F6 Nos partenaires</a></span><br>
        </div>

        <div class="divDroite">
            <p class="prez">Conditions</p>
                <span class="droite"><a class="white" href="http://aquirespi.fr/index.php?page=68">&#x1F5F6 Informations légales</a></span>
        </div>
        
    </footer>