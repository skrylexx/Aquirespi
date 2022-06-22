<?php 

require_once("require/bdd/config.php");

if (!empty($_GET['id'])) {

	$id = $_GET['id'];

	$all = $bdd->query("SELECT * FROM article WHERE article.id = $id");
	$articles = $all->fetchAll();
	$articles = $articles[0];

}


 ?>