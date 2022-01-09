<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
<link rel="stylesheet" type="text/css" href="/Senbio/src/css/footer.css">
<link rel="stylesheet" type="text/css" href="/Senbio/src/css/Mydesign.css">
<script type="text/javascript" src="/Senbio/src/js/app.js"></script>
</head>
<body >
  <div class="page">
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #E5DBCF;">
  <div id="sideNavigation" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <?php 

              foreach ($categorie as $key => $value) {
                echo '<a  href="'.BASE_URL.SP."categorie".SP.$value['IdCat'].'">'.$value['libCat'].'</a>';
              }


           ?>

        </div>
         
        <nav class="topnav">
          <a href="#" onclick="openNav()">
            <svg width="30" height="30" id="icoOpen">
                <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
                <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
                <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
            </svg>
          </a>
        </nav>
  <a class="navbar-brand" href="<?= BASE_URL.SP."accueil" ?>"><img src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."Sen'Bio-Locaux.png" ?>"  width="150px" height="150px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL.SP."contact" ?>">Besoin d'aide?<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL.SP."accueil" ?>">Accueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL.SP."produit" ?>">Catalogue</a>
      </li>
    
      </ul>

     <a class="my-2 my-sm-0" href="<?= BASE_URL.SP."panier" ?>"><button style="background-color: white;"><input type="image" name="panier" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."panier.jpg" ?>"  width="50px" height="50px"><strong>Panier&nbsp;<?= $c; ?></strong></button></a>
 </div>   
</nav>
<div class="section">
 
    <?php if (!isset($_SESSION['user'])): ?>
       <a href="<?= BASE_URL.SP."connexion" ?>" class="btn btn-outline-success my-2 my-sm-0" >Se connecter</a>
      <a href="<?= BASE_URL.SP."inscrire" ?>" class="btn btn-outline-success my-2 my-sm-0" >S'inscrire</a>

    <?php endif; ?>
    <?php if (isset($_SESSION['user'])): ?>
          <a href="<?= BASE_URL.SP."profil" ?>" class="btn btn-outline-success my-2 my-sm-0" ><img src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."contact.png" ?>" width ="50" height="50" ><?= $_SESSION["user"]["NomUti"] ?>&nbsp;<?= $_SESSION["user"]["PrenomUti"] ?></a>
           <a href="<?= BASE_URL.SP."deconnecter" ?>" class="btn btn-outline-success my-2 my-sm-0" >Se déconnecter</a>
         </select>
         

       
     <?php endif; ?>
     
 </div>
 <br><br><br>  
<div class="container">
	<?php echo $content ?>
</div>
</div>



<br><br><br>
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h1>Sen'Bio-Locaux</h1>
<p>Sen'Bio-Locaux est une boutique en ligne qui a pour but de faciliter la vente des produits locaux .
Votre boutique de rêve est là alors profitez <img src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."smiley_smile.gif" ?>"></p>
  <div class="contact">
    <span><i class="phone"><img alt="mail" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."tel.png" ?> " width="5%" height="5%" title="Appelez nous">&nbsp; 76-591-33-56</i></span><br>
    <br>
    <span><i class="enveloppe"><img alt="mail" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."gmail.png" ?>" width="5%" height="5%" title="Constatez nous via gmail">senbio@gmail.com</i></span>
  </div>
  <br>
  <div class="social">
<a ><img alt="facebook" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."facebook.png" ?>" width="5%" height="5%" title="Rejoignez nous sur facebook"></a>
<a><img alt="twitter" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."twitter.png" ?>" width="5%" height="5%" title="Rejoignez nous sur Twitter"></a>
<a><img alt="instagram" src="<?= BASE_URL.SP."src".SP."image".SP."accueil".SP."instagram.jpg" ?>" width="5%" height="5%" title="Rejoignez nous sur Instagram"></a>
  </div>
    </div>
    <div class="footer-section links">
      <h2>Informations</h2>
      <ul>
        <li><a href="<?= BASE_URL.SP."paiementLiv" ?>" class="perso">Paiement & livraison</a></li>
        <li><a href="<?= BASE_URL.SP."conditions" ?>" class="perso">Conditions d'utilisation</a></li>
        <li><a href="<?= BASE_URL.SP."propos" ?>" class="perso">A propos</a></li>
        <li><a href="<?= BASE_URL.SP."nouveau" ?>" class="perso">Nouveaux produits</a></li>
      </ul>
    </div>
    <div class="footer-section contact">
      <h2>Contactez nous</h2>
      <form>
        <input type="email" name="mail" placeholder="your mail"  class="text-input" size="15"><br>
        <textarea name="message" placeholder="your message......." class="text"></textarea><br>
        <input type="submit" name="ok" value="Send" class="button">
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    copyright &copy; Sen'Bio-Locaux | Design by niangbalo 
  </div> 
  </div>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>