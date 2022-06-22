<?php 
    session_start();
    require_once 'require/bdd/config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:login-page.php');
        die();
    }

//securité : essayer le $data avant la vérification de session pour permettre une double condition dans le if
// qui seraient le !isset($session.......) AND/&& $_SESSION['user'] == utilisateur['token']

    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();

$allArticles = $bdd ->query('SELECT * FROM article ORDER BY id DESC');
$articles = $allArticles;

if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche = htmlspecialchars($_GET['s']);
    $allArticles = $bdd ->query('SELECT * FROM article WHERE (titre LIKE "%'.$recherche.'%") OR (contenu LIKE "%'.$recherche.'%") OR (categorie LIKE "%'.$recherche.'%") OR (titre LIKE "%'.$recherche.'%" AND contenu LIKE "%'.$recherche.'%") OR (titre LIKE "%'.$recherche.'%" AND categorie LIKE "%'.$recherche.'%") OR (contenu LIKE "%'.$recherche.'%" AND categorie LIKE "%'.$recherche.'%") ORDER BY id DESC');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/styleLanding.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi-vertical-cmjn.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="goe.placname" content="Bordeaux, France">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <meta name="keywords" content="kiné, bordeaux, aquitaine, nouvelle-aquitaine, kiné garde, kinésithérapie, santé, medical, aquirespi, aquirespi.org, aquirespi.fr"/>
    <meta name="description" content="Ce site a pour vocation de vous présenter l'ensemble de nos actions ainsi que la façon dont vous pouvez y participer."/>
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

        <div class="divLog">
            <p>Bonjour <?php echo ucwords($data['pseudo']); ?> &#128578;</p>
        </div>

        <div class="divLogo">
            <img class="logo" src="assets/img/logo-aquirespi-vertical-cmjn.png" alt="Logo AquiRespi">
        </div>
<br>
        <div class="divTitleText">
            <p class="titleText">Ce site a pour vocation de vous présenter l'ensemble de nos actions <br> ainsi que la manière dont vous pouvez y participer.<br>Vous trouverez ici des informations quant à la Kinésithérapie,<br> les demandes de consultations, des informations médicales...</p>
        </div>

        <div class="flecheScroll">
            <a class="aFleche" href="#main">&dArr;</a>
        </div>
    </header>

    <main id="main">

        <div class="rechercheArticles">

            <div class="divBar">
                <form method="GET">
                <input class="searchBar" type="search" id="site-search" name="s" placeholder="Rechercher dans notre site...">

                    <button class="submitButton">&#x1F50D;</button>
                    
                </form>
            </div>

            <div class="renvoi">
                <p class="titleSearch">Élements correspondants à votre recherche :</p>
                <div class="divRenvoi">
                    <?php
                        if(isset($_GET['s']) AND !empty($_GET['s'])){
                            if($allArticles->rowCount() > 0){
                                while($article = $allArticles->fetch()){
                                    ?>
                                    <div class="retourBlock"><p class="p"><a class="a" href="read.php?id=<?=$article['id'];?>"><span><?= $article['titre'];?><span></a></p>
                                        <div class="retourContenu"><p><?= $article['contenu'];?></p></div>
                                    </div>
                                    <?php
                                }
                                }else{
                                    ?>
                                    <div class="echec"><p>Nous n'avons trouvé aucun article correspondant à votre recherche &#x1F641;</p></div>
                                    <?php
                                }
                            }
                                ?>
                </div>
                <div class="allArticles"><a class="aAllArticles" href='articles.php'> Afficher tous les articles</a></div>
            </div>
        </div>

<hr class="hrMain">

        <section class="articles">
            <article class="premier">
                <h3>Actualités patients</h3>

                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic fuga quaerat inventore accusantium repellendus provident voluptatibus quasi sed atque quis laborum adipisci soluta, eaque, maxime facilis! Autem, illo quasi.</p>
                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam molestiae porro, deleniti, odio inventore enim vel dignissimos labore dolore voluptatum voluptates laborum tempora esse, doloremque molestias nulla sapiente eius? Optio!</p>
                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur vero minima veritatis dolorem inventore assumenda voluptate cupiditate culpa! Fuga itaque illo quas cum neque alias ea perferendis repellendus maxime?</p>
                <p class="ptitLink"> <a href="actuPatients">&#x21FE; Voir toutes les actualités patients  &#x21FD;</a>
            </article>


            <article class="second">
                <h3>Actualités professionnels de santé</h3>

                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic fuga quaerat inventore accusantium repellendus provident voluptatibus quasi sed atque quis laborum adipisci soluta, eaque, maxime facilis! Autem, illo quasi.</p>
                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non repellat perspiciatis harum laudantium voluptatum itaque numquam consequuntur. Velit magni ipsum soluta nobis corporis a maiores quis dolor, optio, recusandae voluptas!</p>
                <p class="ptit">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non repellat perspiciatis harum laudantium voluptatum itaque numquam consequuntur. Velit magni ipsum soluta nobis corporis a maiores quis dolor, optio, recusandae voluptas!</p>
                <p class="ptitLink"> <a href="actuPro">&#x21FE; Voir toutes les actualités professionnelles  &#x21FD;</a>
            </article>
        </section>

    </main>


<footer>

        <div class="divGauche">
            <fieldset>
                <legend class="prez">AquiRespi</legend>
                <span class="gauche"><a href="http://aquirespi.org">&#x1F5F6; Nous découvrir</a></span><br>
                <span class="gauche"><a href="#">&#x1F5F6; Nos partenaires</a></span><br>
                <span class="gauche"><a href="#">&#x1F5F6; Nous contacter</a></span><br>
            </fieldset>
        </div>

        <div class="divDroite">
            <fieldset>
                <legend class="prez">Conditions</legend>
                <span class="droite"><a href="#">&#x1F5F6; Mentions et informations légales</a></span>
            </fieldset>
        </div>
        
    </footer>
</body>