<?php
require_once('require/bdd/config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/styleAquirespi2.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi-vertical-cmjn.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
        <article class="topArticle">
            <p><h2  class="titre">Membres de notre réseau :</h2></p>

            <p class="textArticle">Présentation des membres de notre réseau :
            <ul class="ulArticle">
                <li>Membre 1 : <strong>Directeur</strong></li>
                <li>Membre 2 : <strong>Acceuil</strong></li>
                <li>Membre 3 : <strong>Community manager</strong></li>
            </ul>
            Notre équipe................................</p>
        </article>
<hr class="hrMain">
        <article class="mainArticle">
            <p class="textArticle"><h2 class="titre">Nos établissements :</h2></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare tempor lorem, nec vulputate augue cursus et. Suspendisse arcu augue, dapibus eget luctus at, imperdiet sit amet elit. Vestibulum massa leo, posuere eu neque quis, accumsan rutrum nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam quam sapien, ultrices a cursus dignissim, eleifend sed est. Vestibulum tempor, dolor a tincidunt cursus, mi libero dapibus mauris, rhoncus bibendum nulla tortor vel neque. Duis at nunc et lorem tristique venenatis. Praesent vestibulum sapien justo, et placerat turpis eleifend sed.
                Aliquam ultrices blandit rutrum. Fusce ac pellentesque sapien. Fusce volutpat elit eget pulvinar porttitor. Nullam ac sagittis lectus. Donec dignissim ipsum risus, ut rutrum arcu tincidunt quis. Morbi porta ultrices rhoncus. Vivamus accumsan nunc sit amet lacus rhoncus, eu hendrerit arcu volutpat. Suspendisse suscipit velit id urna volutpat, a imperdiet nisi viverra.
                Curabitur at viverra diam, vulputate venenatis mauris. Sed gravida quam eget tempus viverra. Nunc efficitur sapien placerat velit vulputate, non mattis orci porta. Curabitur sed urna ut sem finibus posuere. Nullam hendrerit tellus nulla, id tincidunt mauris interdum id. Pellentesque a lectus id neque elementum placerat ac et est. Sed et erat in lectus scelerisque molestie ullamcorper nec nibh. Proin at lectus leo.
                Integer ut varius sem. In tincidunt ultricies velit ac fringilla. Aliquam ullamcorper feugiat porttitor. Phasellus sed nulla vitae sapien mollis luctus. Integer quis efficitur leo. Maecenas ultrices lacus quis varius dapibus. Nunc pulvinar vestibulum sodales. Vivamus hendrerit facilisis enim, eu gravida nibh hendrerit et. Praesent erat magna, interdum volutpat lectus sollicitudin, ultricies euismod nunc. Vivamus sed dictum nisl. Vivamus dolor sapien, iaculis sit amet sagittis eu, feugiat non est. Vivamus aliquet rutrum felis vitae congue. Nunc eget fermentum felis.
                Maecenas eu quam a nulla cursus interdum vel in purus. Vivamus sodales at risus ac ultricies. Etiam pellentesque erat vel lectus vulputate suscipit. Nulla sed dui dolor. Proin rhoncus rhoncus massa, sit amet sollicitudin velit ullamcorper in. Suspendisse auctor urna pharetra nisl pulvinar fringilla. Nam et lorem nisl. Aliquam nec augue ullamcorper, elementum tortor vitae, cursus ante. Sed pretium dolor non ex maximus hendrerit. Nullam tempor, magna at semper egestas, nisi sem commodo orci, in laoreet lectus risus vel ligula. Pellentesque dapibus tincidunt leo, id vestibulum odio consequat ac. Nulla facilisi.</p>
        </article>
        <article class="mainArticle">
            <p><h2 class="titre">Partenaires d'Aquirespi :</h2></p>
            <p class="textArticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare tempor lorem, nec vulputate augue cursus et. Suspendisse arcu augue, dapibus eget luctus at, imperdiet sit amet elit. Vestibulum massa leo, posuere eu neque quis, accumsan rutrum nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam quam sapien, ultrices a cursus dignissim, eleifend sed est. Vestibulum tempor, dolor a tincidunt cursus, mi libero dapibus mauris, rhoncus bibendum nulla tortor vel neque. Duis at nunc et lorem tristique venenatis. Praesent vestibulum sapien justo, et placerat turpis eleifend sed.
                Aliquam ultrices blandit rutrum. Fusce ac pellentesque sapien. Fusce volutpat elit eget pulvinar porttitor. Nullam ac sagittis lectus. Donec dignissim ipsum risus, ut rutrum arcu tincidunt quis. Morbi porta ultrices rhoncus. Vivamus accumsan nunc sit amet lacus rhoncus, eu hendrerit arcu volutpat. Suspendisse suscipit velit id urna volutpat, a imperdiet nisi viverra.
                Curabitur at viverra diam, vulputate venenatis mauris. Sed gravida quam eget tempus viverra. Nunc efficitur sapien placerat velit vulputate, non mattis orci porta. Curabitur sed urna ut sem finibus posuere. Nullam hendrerit tellus nulla, id tincidunt mauris interdum id. Pellentesque a lectus id neque elementum placerat ac et est. Sed et erat in lectus scelerisque molestie ullamcorper nec nibh. Proin at lectus leo.
                Integer ut varius sem. In tincidunt ultricies velit ac fringilla. Aliquam ullamcorper feugiat porttitor. Phasellus sed nulla vitae sapien mollis luctus. Integer quis efficitur leo. Maecenas ultrices lacus quis varius dapibus. Nunc pulvinar vestibulum sodales. Vivamus hendrerit facilisis enim, eu gravida nibh hendrerit et. Praesent erat magna, interdum volutpat lectus sollicitudin, ultricies euismod nunc. Vivamus sed dictum nisl. Vivamus dolor sapien, iaculis sit amet sagittis eu, feugiat non est. Vivamus aliquet rutrum felis vitae congue. Nunc eget fermentum felis.
                Maecenas eu quam a nulla cursus interdum vel in purus. Vivamus sodales at risus ac ultricies. Etiam pellentesque erat vel lectus vulputate suscipit. Nulla sed dui dolor. Proin rhoncus rhoncus massa, sit amet sollicitudin velit ullamcorper in. Suspendisse auctor urna pharetra nisl pulvinar fringilla. Nam et lorem nisl. Aliquam nec augue ullamcorper, elementum tortor vitae, cursus ante. Sed pretium dolor non ex maximus hendrerit. Nullam tempor, magna at semper egestas, nisi sem commodo orci, in laoreet lectus risus vel ligula. Pellentesque dapibus tincidunt leo, id vestibulum odio consequat ac. Nulla facilisi.</p>
        </article>
        <article class="botArticle">
            <p><h2 class="titre">Cellule d'appui</h2></p>
            <p class="textArticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare tempor lorem, nec vulputate augue cursus et. Suspendisse arcu augue, dapibus eget luctus at, imperdiet sit amet elit. Vestibulum massa leo, posuere eu neque quis, accumsan rutrum nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam quam sapien, ultrices a cursus dignissim, eleifend sed est. Vestibulum tempor, dolor a tincidunt cursus, mi libero dapibus mauris, rhoncus bibendum nulla tortor vel neque. Duis at nunc et lorem tristique venenatis. Praesent vestibulum sapien justo, et placerat turpis eleifend sed.
                Aliquam ultrices blandit rutrum. Fusce ac pellentesque sapien. Fusce volutpat elit eget pulvinar porttitor. Nullam ac sagittis lectus. Donec dignissim ipsum risus, ut rutrum arcu tincidunt quis. Morbi porta ultrices rhoncus. Vivamus accumsan nunc sit amet lacus rhoncus, eu hendrerit arcu volutpat. Suspendisse suscipit velit id urna volutpat, a imperdiet nisi viverra.
                Curabitur at viverra diam, vulputate venenatis mauris. Sed gravida quam eget tempus viverra. Nunc efficitur sapien placerat velit vulputate, non mattis orci porta. Curabitur sed urna ut sem finibus posuere. Nullam hendrerit tellus nulla, id tincidunt mauris interdum id. Pellentesque a lectus id neque elementum placerat ac et est. Sed et erat in lectus scelerisque molestie ullamcorper nec nibh. Proin at lectus leo.
                Integer ut varius sem. In tincidunt ultricies velit ac fringilla. Aliquam ullamcorper feugiat porttitor. Phasellus sed nulla vitae sapien mollis luctus. Integer quis efficitur leo. Maecenas ultrices lacus quis varius dapibus. Nunc pulvinar vestibulum sodales. Vivamus hendrerit facilisis enim, eu gravida nibh hendrerit et. Praesent erat magna, interdum volutpat lectus sollicitudin, ultricies euismod nunc. Vivamus sed dictum nisl. Vivamus dolor sapien, iaculis sit amet sagittis eu, feugiat non est. Vivamus aliquet rutrum felis vitae congue. Nunc eget fermentum felis.
                Maecenas eu quam a nulla cursus interdum vel in purus. Vivamus sodales at risus ac ultricies. Etiam pellentesque erat vel lectus vulputate suscipit. Nulla sed dui dolor. Proin rhoncus rhoncus massa, sit amet sollicitudin velit ullamcorper in. Suspendisse auctor urna pharetra nisl pulvinar fringilla. Nam et lorem nisl. Aliquam nec augue ullamcorper, elementum tortor vitae, cursus ante. Sed pretium dolor non ex maximus hendrerit. Nullam tempor, magna at semper egestas, nisi sem commodo orci, in laoreet lectus risus vel ligula. Pellentesque dapibus tincidunt leo, id vestibulum odio consequat ac. Nulla facilisi.</p>
        </article>
    </main>
        <footer>

        <div class="divGauche">
            <p class="prez">AquiRespi</p>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=70">&#x1F5F6; Nous contacter</a></span><br>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=69">&#x1F5F6; Nous découvrir</a></span><br>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=71">&#x1F5F6; Nos partenaires</a></span><br>
        </div>

        <div class="divDroite">
            <p class="prez">Conditions</p>
                <span class="droite"><a class="white" href="#">&#x1F5F6; Informations légales</a></span>
        </div>
        
    </footer>