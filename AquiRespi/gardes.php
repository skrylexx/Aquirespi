<?php
session_start();
require_once('require/bdd/config.php');
if(!isset($_SESSION['user'])){
    header('Location:login-page.php');
    die();
}
//On récupère les infos utilisateurs de la session
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();

//on stock le secteur de l'user
$secteurUser = $data['secteur'];

//on stock les secteurs de garde
$sg = $bdd ->prepare('SELECT secteur FROM gardes');
$sg->execute();
$secteurGarde = $sg->fetchAll();

//on récupère les informations en fonction de si secteur garde et secteur user sont égaux
$r = $bdd->prepare('SELECT g.secteur, g.date, g.nom_professionnel, g.id_professionnel from gardes g inner join utilisateurs u on g.id_professionnel = u.id where %?% = %?% ORDER BY date DESC');
$r->execute(array($secteurGarde, $secteurUser));
$request = $r->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-aquirespi.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="assets/css/styleLanding.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&family=Nunito:ital,wght@0,300;1,300&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex">

</head>
<body>
    <header>

        <div class="divLogo">
            <img class="logo" src="assets/img/logo-aquirespi.png" alt="Logo AquiRespi">
        </div>

        <div class="divAffichage">
            <span class="affichage"><h3><a href="#">Gardes de Mr/Mme <?php echo ucwords($data['pseudo']); ?> !</a></h3></span>
        </div>

        <div class="divDeconnexion">
            <a href="deconnexion.php" class="deconnexion">Déconnexion</a>
        </div>    
    </header>

    <div>
        <?php
            if($r->rowCount() > 0){
                while($request = $r->fetch()){
                    ?>
                    <div class="retourBlock"><p class="p"><?=$request['date'];?> <br><span><?= $request['secteur'];?><span></a></p>
                        <div class="retourContenu"><p><?= $request['id_professionnel'];?></p><br><p><?= $request['nom_professionnel'];?></p></div>
                    </div>
                    <?php
                }
                }else{
                    ?>
                    <p>
                    <?= var_dump($r) ;?>   
                    Aucune garde ne correspond à votre recherche</p>
                    <?php
                }
        ?>
    </div>