<?php
    require_once('require/bdd/config.php');
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi-vertical-cmjn.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">

            <title>Accès membres</title>
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
                <div class="retour">
                    <span class="back"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">retour</a></span>
                </div>
            
            </header>
            <main>
                <div class="login-form">
                    <?php 
                        if(isset($_GET['login_err']))
                        {
                            $err = htmlspecialchars($_GET['login_err']);

                            switch($err)
                            {
                                case 'password':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> mot de passe incorrect
                                    </div><br>
                                <?php
                                break;

                                case 'email':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> email incorrect
                                    </div><br>
                                <?php
                                break;

                                case 'already':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur</strong> compte non existant
                                    </div><br>
                                <?php
                                break;

                                case 'vide':
                                ?>
                                    <div class="alert alert-danger">
                                        <strong>Erreur,</strong> veuillez remplir le formulaire correctement.
                                    </div><br>
                                <?php
                                break;
                            }
                        }
                        ?> 
                
                    <form class="formulaire" action="connexion.php" method="post">
                        <div class="title">
                            <h2 class="text-center">Connexion</h2>   
                        </div> 
                    
                        <div class="centre">
                            <div class="mail">
                                <p>Email :</p>
                                <input type="email" name="email" class="form-control" placeholder="exemple@mail.com" required="required" autocomplete="off">
                            </div>
                            <div class="password">
                                <p>Mot de passe :</p>
                                <input type="password" name="password" class="form-control" placeholder="Votre mot de passe..." required="required" autocomplete="off">
                            </div>
                        </div>

                        <div class="sub">
                            <button type="submit" class="btn btn-primary btn-block" action="connexion.php" method="post">Connexion</button>
                        </div>   
                    </form>
                </div>
            </main>

        <footer>

        <div class="divGauche">
            <p class="prez">AquiRespi</p>
                <span class="gauche"><a class="white" href="https://aquirespi.fr/index.php?page=70">&#x1F5F6 Nous contacter</a></span><br>
                <span class="gauche"><a class="white" href="https://aquirespi.fr/index.php?page=69">&#x1F5F6 Nous découvrir</a></span><br>
                <span class="gauche"><a class="white" href="http://aquirespi.fr/index.php?page=71">&#x1F5F6 Nos partenaires</a></span><br>
        </div>

        <div class="divDroite">
            <p class="prez">Conditions</p>
                <span class="droite"><a class="white" href="http://aquirespi.fr/index.php?page=68">&#x1F5F6 Informations légales</a></span>
        </div>
        
    </footer>
    </body>
</html>