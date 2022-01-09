<?php

define("SRC", dirname(__FILE__));
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("CONFIG", ROOT.SP."config");
define("VUE", ROOT.SP."vue");
define("MODEL", ROOT.SP."model");
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));
define("LIV", 2000);


require CONFIG.SP."config.php";
require MODEL.SP."donnees.class.php";

$model = new Data();


$categorie = $model->RecupererCategorie();

$c = $model->count();

//require MODEL.SP."panier.class.php";

//$panier = new Panier();
//$m = $model->ajouter(1);
//print_r($m); exit();

//$data = $model->RecupererProduit(2,1);
//print_r($data); exit();


//$var = $data->creerUtilisateur('ka','amy',778523256,'dakar');
// die($var);

require 'fonctions.php';



 ?>
