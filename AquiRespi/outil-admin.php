<?php 
require_once('require/bdd/config.php');
// alexAdmin -- alexAdmin123
session_start();
    require_once 'require/bdd/config.php'; // ajout connexion bdd 
   // si session existe pas ou si pas connecté, on redirige
    if(!isset($_SESSION['user'])){
        header('Location:connexion-admin.php');
        die();
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styleAdmin.css">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi-vertical-cmjn.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
        <nav>
            <ul>
                <li class="menu-deroulant">
                    <a href="#">Articles</a>
                    <ul class="sous-menu">
                        <li><a href="admin-options/update-article.php">Modifier un article</a></li>
                        <li><a href="admin-options/create-article.php">Créer un article</a></li>
                        <li><a href="admin-options/delete-article.php">Supprimer un article</a></li>
                    </ul>
                </li>

                <li class="menu-deroulant">
                    <a href="#">Comptes</a>
                    <ul class="sous-menu">
                        <li><a href="admin-options/creation-compte.php">Créer un nouveau compte</a></li>
                        <li><a href="admin-options/update-compte.php">Modifier des informations utilisateurs</a></li>
                        <li><a href="admin-options/delete-compte.php">Supprimer un utilisateur</a></li>
                    </ul>
                </li>

                <li class="menu-deroulant">
                    <a href="#">Gardes</a>
                    <ul class="sous-menu">
                        <li><a href="admin-options/view-gardes-admin.php">Consulter les gardes</a></li>
                        <li><a href="admin-options/gardes-admin.php">Modification des gardes</a></li>
                    </ul>
                </li>

                </ul>
          </nav>
        </header>
        <main>
            <section>
                
            </section>
        </main>
        <footer></footer>
    </body>
<html>