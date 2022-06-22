<?php
    require_once 'require/bdd/config.php'

?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name="robots" content="noindex">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">

            <title>Accès admin</title>
        </head>
    <body>
        <header>
            <div class="divLogo">
                <img class="logo" src="assets/img/logo-aquirespi.png" alt="Logo AquiRespi">
            </div>

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
                                </div>
                            <?php
                            break;

                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                            <?php
                            break;

                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte non existant
                                </div>
                            <?php
                            break;

                            case 'vide':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur,</strong> veuillez remplir le formulaire correctement.
                                </div>
                            <?php
                            break;
                        }
                    }
                    ?> 
                
                <form class="formulaire" name="connexionAdmin" action="connexion-admin_traitement.php" method="post">
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
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
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