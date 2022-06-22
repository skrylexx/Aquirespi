<?php
session_start();
require_once '../require/bdd/config.php'; // ajout connexion bdd 
// si session existe pas ou si pas connecté, on redirige
if(!isset($_SESSION['user'])){
    header('Location:../connexion-admin.php');
    die();
}