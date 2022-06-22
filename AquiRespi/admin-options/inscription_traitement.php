<?php 
session_start();
require_once '../require/bdd/config.php'; // ajout connexion bdd 
// si session existe pas ou si pas connecté, on redirige
if(!isset($_SESSION['user'])){
    header('Location: ../connexion-admin.php');
    die();
}

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=aquirespi;', 'root');
    }catch(Exception $e)
        {
            die('Erreur'. $e->getMessage());
        }

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['droit']) && !empty($_POST['secteur']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $droit = htmlspecialchars($_POST['droit']);
        $secteur = htmlspecialchars($_POST['secteur']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie la longueur du pseudo
                if(strlen($email) <= 100){ // On verifie la longueur du mail
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est valide
                        if($password === $password_retype){ // si les deux mdp saisis sont les mêmes

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, droit, secteur, password, token) VALUES(:pseudo, :email, :droit, :secteur, :password, :token)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'droit' => $droit,
                                'secteur' => $secteur,
                                'password' => $password,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
                            header('Location: creation-compte.php?reg_err=success');
                            die();
                        }else{ header('Location: creation-compte.php?reg_err=password'); die();}
                    }else{ header('Location: creation-compte.php?reg_err=email'); die();}
                }else{ header('Location: creation-compte.php?reg_err=email_length'); die();}
            }else{ header('Location: creation-compte.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: creation-compte.php?reg_err=already'); die();}
    }