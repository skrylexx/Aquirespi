<?php
    require_once 'require/bdd/config.php'

?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styleLogAdmin.css">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/admin-panel.png">
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
                </form><br>
                <a href="index.php">Accès à l'index</a>
            </div>
        </main>

        <footer>
    </footer>
    </body>
</html>