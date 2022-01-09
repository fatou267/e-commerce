<?php 
session_start();
require 'inclure.php';
	$url = trim($_SERVER['PATH_INFO'],'/');
	$url = explode('/',$url);
	$route = array("accueil", "produit", "categorie", "contact" , "details", "panier", "supprimer", "connexion","inscrire","actionInscription","actionAuthentifier", "profil", "deconnecter","update","actionUpdate","commande","paiementLiv","conditions","propos","nouveau","Ajouter");
 	

 	 $action = $url[0];

 	 if (!in_array($action, $route)) {
 	 	$title  = "Page Error";
 	 	$content = "url introuvable"; 	 }
 	 else
 	 {
 	 	//echo("Bienvenue dans l action ".$action);
 	 	$fonct = "display".ucwords($action);

 	 	$title  = "Page".$action;
 	 	$content = $fonct();

 	 	
 	 }
 	 require VUE.SP.'template'.SP.'default.php';

 
 ?>