<?php 
 
  function verifparam(){
     if (isset($_POST) && sizeof($_POST)>0) {
        foreach ($_POST as $key => $value) {
          $data = trim($value);
          $data = stripslashes($data);
          $data = strip_tags($data);
          $data =htmlspecialchars($data);

          $_POST[$key] = $data;


        }
     }
  }

  function displayaccueil(){
  	return '<table><tr>
        <td><div id="main">
         <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."th.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."nouveau".'" class="pro"><h5>Nouveautés</h5></a>
        </div>
        </div></td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."arachide.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Arachide 100% sénégalais</h5></a>
        </div>
        </div>
        </td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."rixel.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Sunu riz</h5></a>
        </div>
        </div>
        </td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."sucre.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Sunu sucre</h5></a>
        </div>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."piment.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Piment local</h5></a>
        </div>
        </div>
        </td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."citron.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Citron local</h5></a>
        </div>
        </div>
        </td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."Mil.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Farine de mil </h5></a>
        </div>
        </div>
        </td>
        <td>
        <div class="cont">
          <img src="'.BASE_URL.SP."image".SP."general".SP."pommedeterre.jpg".'" width="300px" height="300px"><br>
          <div class="text">
          <a href="'.BASE_URL.SP."produit".'" class="pro"><h5>Pomme de terre local</h5></a>
        </div>
        </div>
        </td>
        </tr>
        </table>
        <br><br><br>
        </div>
        <aside>
          <a href="'.BASE_URL.SP."produit".'" class="pro">Plus de produits</a>
        </aside>';
  }
  function displaypaiementLiv(){
    return "<h2>Paiement & livraison</h2>

      <h3>Paiement</h3>

      <p>Le Paiement s'effectue à la livraison. Vous payez vos achats directement à la livraison .(Pour tout le Sénégal)</p>
      <h3>Frais de livrasion</h3>

      <p>La livraison est de 2 000 CFA pour tout le Sénégal.</p>

      <h3>Délai de livrasion</h3>

      <p>Les colis sont expediés le jour même! Vous êtes livré en -24h sur Dakar et -48h pour les autres régions du Sénégal.</p>

      <h3>Retours et échanges</h3>

      <p>Le client dispose d'un délai de 30 jours pour retourner/échanger un article.Sen'Bio-Locaux ne rembourse pas les articles retournés mais vous permet de les échanger avec des produits de même valeur.</p>

      <h3>Conditions d'échange et de retour</h3>

      <p>Le(s) article(s) retourné(s) doivent être neufs, non utilisés et dans leur boite d’origine parfaitement intacte. Tout échange ou retour doit faire l’objet d’une demande d'échange au prés de Sen'Bio-Locaux.</p>
      </div>";
  }
  function displaynouveau(){
    return '<h1> Bienvenue </h1> <p>Rendez vous prochainement avec de nouveaux produits .</p>
            <p>Nos nouveaux rubriques pour bientôt !!</p>
            <p>Merci de votre fidélité .</p>

          <p>Sen\'Bio-Locaux le meilleur site de vente des produits 100% sénégalais.</p>
';
  }
  function displayconditions(){
    return '<h1> Bienvenue </h1>';
  }
  function displaypropos(){
    return '<h1> Bienvenue </h1><p>Sen Bio-Locaux est une boutique en ligne qui a pour but de faciliter la vente des produits locaux .</p>
      <p>Il est tant que le Sénégal commence à utiliser ses propres produits pour son emergence tant </p><p>voulu c est à cet effet que ce boutique spécifie uniquement exclusivement les ventes des </p><p>produits 100% locaux c est à dire d origine sénégalaise .A vous de juger alors hesitez pas  </p><p>à faire vos achats rapidement. Votre boutique de rêve est là alors profitez <img src="'.BASE_URL.SP."src".SP."image".SP."accueil".SP."smiley_smile.gif" .'"></p>';
  }
  function displaycontact(){
    return '<h3>Besoin de commander:</h3>
  <ul>
  <li>Cliquer sur le produit choisi </li>
  <li>Cocher l\'option acheter </li>
  <li>Valider la commande</li>
  <li>Choisir votre mode de livraison</li>
  <li>Valider la livraison</li>
  <li>Choisir votre mode de payement</li>
  <li>Valider le payement</li>
  </ul>
  <h3>Faire une réclamation:</h3>
  <ul>
  <li><span><i class="phone"><img alt="mail" src="'.BASE_URL.SP."src".SP."image".SP."accueil".SP."tel.png" .'" width="3%" height="3%" title="Appelez nous">Service client : (+221) 76-591-33-56</i></span></li>
  </ul>
  <h3>Devenir vendeur?</h3>
  <ul>
  <li><span><i class="phone"><img alt="mail" src="'. BASE_URL.SP."src".SP."image".SP."accueil".SP."tel.png" .'" width="3%" height="3%" title="Appelez nous">Service client : (+221) 77-236-41-20</i></span></li>
  </ul>
  <h3>Autres </h3>
  <ul>
  <li><span><i class="phone"><img alt="mail" src="'. BASE_URL.SP."src".SP."image".SP."accueil".SP."tel.png" .'" width="3%" height="3%" title="Appelez nous">Service client : (+221) 76-591-33-56</i></span></li>
  </ul>

  <p>Merci de votre fidélité .</p>
  <p>Sen\'Bio-Locaux le meilleur site de vente des produits 100% sénégalais.</p>';
  }

  function displayproduit(){
  	global $model;

  	$dataPro = $model->RecupererProduit();
    $result = '<h2 style="text-align:center;">Sen\'Bio-locaux ,votre boutique en ligne</h2> ';
    $result.= '<div style=" margin-left:5%;">';
  	 foreach ($dataPro as $key => $value) {
  	 	$result .= '<div class="card" style="width: 18rem; display:inline-block;">
  			<img src="'.BASE_URL.SP."image".SP."Articles".SP.$value["img"].'" class="card-img-top" alt="produit" width="250" height="250">
  			<div class="card-body" style="text-align:center;">
    		<h5 class="card-title">'.$value["Nom"].'</h5>
        <h5 class="card-title">'.$value["prix"].'Fcfa'.$value["unite"].'</h5>
        
   			 <a href="'.BASE_URL.SP."details".SP.$value["id"].'" class="btn btn-primary">Details</a>
   			 <a href="'.BASE_URL.SP."Ajouter".SP.$value["id"].'" class="btn btn-success add">Ajouter au panier</a>
 		<br><br><br>
     </div>
		</div>';
  	 }
  $result .='</div>';
  	 return $result;
  }

  function displaycategorie()
  {
      global $model;
      global $url;
      global $categorie;
      if (isset($url[1]) && is_numeric($url[1]) && $url[1]>0 && $url[1]<=sizeof($categorie)) {
        $result = '<h4 style=" border-style: solid; border-color: lime; color=black; text-align:center;">'.$categorie[$url[1] - 1]["libCat"].'</h4>';
         $dataCat = $model->RecupererProduit(null,$url[1]);

         foreach ($dataCat as $key => $value) {
          $result .= '<div class="card" style="width: 18rem; display:inline-block;">
            <img src="'.BASE_URL.SP."image".SP."Articles".SP.$value["img"].'" class="card-img-top" alt="produit" width="250" height="250">
            <div class="card-body" style="text-align:center;">
            <h5 class="card-title">'.$value["Nom"].'</h5>
             <h5 class="card-title">'.$value["prix"].'Fcfa'.$value["unite"].'</h5>


             <a href="'.BASE_URL.SP."details".SP.$value["id"].'" class="btn btn-primary">Details</a>
             <a href="<a href="'.BASE_URL.SP."Ajouter".SP.$value["id"].'" class="btn btn-block btn-success add ">Ajouter au panier</a>
              <br><br>
         </div>
        </div>';
          }
      }
      else
      {
          $result = '<h1> URL incorrecte</h1>';
      }
     
    return $result;
  }

  function displaydetails(){
    global $model;
    global $url;
    global $categorie;
    

    $dataDet = $model->RecupererProduit(null,null, $url[1]);

      $result = '<div class="row details " >
      <div class="col-md-5 col-12 ">
      <img src="'.BASE_URL.SP."image".SP."Articles".SP.$dataDet[0]["img"].'" class="card-img-top" alt="produit" width="300" height="300">
      </div>
      <div class="col-md-7 col-12">
        <h5 class="card-title">'.$dataDet[0]["Nom"].'</h5>
        <h5 class="card-title">'.$dataDet[0]["prix"].'Fcfa'.$dataDet[0]["unite"].'</h5>
        <h5>'.$dataDet[0]["descrip_pro"].'</h5>
        <h5>Categorie: '.$categorie[$dataDet[0]["Categorie"]-1]["libCat"].'</h5>
        <a href="'.BASE_URL.SP."Ajouter".SP.$dataDet[0]["id"].'"  class="btn btn-block btn-success add ">Ajouter au panier</a>
        <a href="'.BASE_URL.SP."produit".'" class="btn btn-block btn-primary">Retour</a>
      </div>
      </div>';

    return $result;
  }
  function displayAjouter()
  {
    global $model;
     global $url;
     
    //$json =array('error'=>true);
        if (isset($url[1])) {
        $idpro = $url[1];
   //$datapanier = $model->RecupererProduit(null,null, $url[1]);
       $produit = $model->RecupererProduit(null,null, $url[1]);
       $_SESSION["panier"][] = $produit[0];
  }
        
         
    if(empty($_SESSION['panier']))
    {
      $json="ce produit n existe pas";
    }
    $r = $model->ajouter($_SESSION['panier']);  
    $json ="<script>
         if(confirm('Produit ajouté avec succés . Voulez vous consulter votre panier?'))
            {
                location.href = '/Senbio/panier';
            }
         else
         {
            location.href = '/Senbio/produit';
         }
    </script>";

  
   return $json;    


}



function displaypanier(){
     global $model;
     global $url;

  

  if (!isset($_SESSION['panier']) || sizeof($_SESSION['panier']) ==0) {
          return '<div style="text-align : center;"><img src="'. BASE_URL.SP."image".SP."general".SP."vide.jpg" .'" width="5%" height="5%"><br><label>Votre panier est vide.</label><br>
          <br>
            Vous avez déjà un compte? <a href="'.BASE_URL.SP."connexion".'">Connectez vous</a> pour voir les articles dans votre panier.
            </div>
            <br>
            <a href="'.BASE_URL.SP."produit".'"  class="btn btn-block btn-success add ">Commencer vos achats</a>';
  }

 
       $result = '<table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Description</th>
                          <th scope="col">Image</th>
                          <th scope="col">Prix</th>
                          <th scope="col">Quantite</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody> ';
   $total = 0;
  foreach ($_SESSION["panier"] as $key => $value)
  {
      $total += $value["prix"];
   $result .='<tr>
   <th scope="row">'.$value["id"].'</th>
   <td>'.$value["Nom"].'</td>
  <td>'.$value["descrip_pro"].'</td>
  <td><img src="'.BASE_URL.SP."image".SP."Articles".SP.$value["img"].'" width="100px" height="100px"></td>
  <td>'.$value["prix"].'Fcfa</td>
  <td>1</td>
   <td><a href="'.BASE_URL.SP."supprimer".SP.$key.'" ><img src="'. BASE_URL.SP."image".SP."general".SP."supp.png" .'" width="50" height="50"></a></td>
    </tr>';
    
 }
    $total_pro = $total + LIV ;
       $result .= '<tr><td></td><td></td><td></td><td>Sous total :</td><td>'.$total.'Fcfa</td><td></td><td></td></tr>';
       $result .= '<tr><td></td><td></td><td></td><td>Livraison :</td><td>'.LIV.'Fcfa</td><td></td><td></td></tr>';
       $result .= '<tr><td></td><td></td><td></td><td>Total :</td><td>'.$total_pro.'Fcfa</td><td></td><td></td></tr>';
      $result .= '</tbody>
        </table>'; 

        
        
    
      $result .= '<a href="'.BASE_URL.SP."commande".'" class="btn btn-block btn-success">finaliser votre commande</a>';
      $result .= '<a href="'.BASE_URL.SP."produit".'" class="btn btn-block btn-primary">Poursuivre vos achats</a>';

    return $result;
 }
 

     
  function displaycommande()
  {
      global $model;
      if (isset($_SESSION['user'])) {

        $dataUti = $_SESSION['user'];
          foreach ($_SESSION['panier'] as $key => $value) {
            
            $r = $model->creerCommande($dataUti["idUti"],$value["id"],$value["prix"],1);
            if (!$r) {
               return "validation echouée";
            }
          }
          unset($_SESSION['panier']);
          $result = 'Commande reussie '.$dataUti["NomUti"].'  '.$dataUti["PrenomUti"].'<br> Le numéro de la commande est :SBL000'.$dataUti["idUti"].$value["id"].'<br>Adresse de livraison :'.$dataUti["AddUti"].'<br><h5 class="btn btn-block btn-danger">Veuillez enregistrer ses informations !!<h5>
          <br><a href="'.BASE_URL.SP."produit".'"><h5 class="btn btn-block btn-primary">Commencer une nouvelle commande<h5></a>';
      }
      else
      {
         $result = header("Location:".BASE_URL.SP."inscrire");
      }

      return $result;

  }
  function displaysupprimer()
  {
      global $url;
      if (isset($url[1]) && is_numeric($url[1])) {
          $param = $url[1];
          unset($_SESSION['panier'][$param]);
          header("Location:".BASE_URL.SP."panier");
      }
  }

  function displayconnexion(){
     $result = '<h1>Connexion</h1>';
     $result .= '<form method="post" action="actionAuthentifier">
        <fieldset>
          <legend>identification</legend>
          <table>
            <tr>
              <td>
          <label>Nom d utilisateur : </label></td>
          <td><input type="email" name="mail" required class="forme"><br><br></td>
        </tr>
        <tr>
        <td>
          <label>Mot de passe : </label></td>
          <td><input type="password" name="mdp" required class="forme"><br><br></td>
        </tr>
        </table>
        <br>
          <input type="submit"  value="connecter">
         
        </fieldset>
      </form>
      ';

   return $result;

  }
   function displayactionAuthentifier()
   {
      global $model;
      global $c;
        $email=$_POST['mail'];
        $mdp=$_POST['mdp'];

      $datUti = $model->authentifier($email,$mdp);
         if ($datUti) {
            $_SESSION['user'] = $datUti;
            if ($c == 0) {
              return '<script>
                  alert("authentification reussie  avec succés");
                  location.href = "/Senbio/produit";
                  </script> ';
            }
            else
            {
              return '<script>
                  alert("authentification reussie  avec succés");
                  location.href = "/Senbio/panier";
                  </script> ';
            }
        
                
            
          }
          else
          {
             return '<script>
                  alert("authentification echouée ");
                  history.back();
                  </script> ';
          }

   }
  
  function displayinscrire(){
    //formulaire inscription avec action  = actionInscription
    $result = '<h1>Inscription</h1>';

    $result .= '<form method="post" action="actionInscription" class ="col-md-6">
          <fieldset>
            <legend>Remplir les champs</legend>
            <div>Sélectionnez votre sexe<label>*</label></div>
            <select>
              <option selected="true">Sexe</option>
              <option>M</option>
              <option>F</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div >Nom<label>*</label></div>
            <input type="text" name="nom" required class="forme" value=""><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="prenom" required class="forme" value=""><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="tele" required class="forme"><br>
            <div>Adresse<label>*</label></div>
            <input type="text" name="add" required class="forme" placeholder="Région,Departement"><br>
            
            <div>Email<label>*</label></div>
            <input type="email" name="mail" required class="forme"><br>
            <div>Mot de passe<label>*</label></div>
            <input type="password" name="mdp" required class="forme"><br>
            <br><br>
            <input type="submit" name="ok" value="valider">
            <input type="reset" name="ok" value="Reinitialiser">
            <p>Déjà un compte?<a href="'.BASE_URL.SP."connexion".'"> se connecter</a></p>
          </fieldset>
        </form>
        ';

  return $result;
  }

  function  displayactionInscription()
  {
      global $model;
      $nom=$_POST['nom'];
      $prenom = $_POST['prenom'];
       
      $tele= $_POST['tele'];
      $email=$_POST['mail'];
      $add=$_POST['add'];
        
      $mdp=$_POST['mdp'];

      $data = $model->creerUtilisateur($nom ,$prenom,$tele,$add,$email,$mdp);
      if ($data) {
        $datUti = $model->authentifier($email,$mdp);
         if ($datUti) {
           $_SESSION['user'] = $datUti;
           if ($c == 0) {
              return '<script>
                  alert("Inscription reussie  avec succés");
                  location.href = "/Senbio/produit";
                  </script> ';
            }
            else
            {
              return '<script>
                  alert("Inscription reussie avec succés");
                  location.href = "/Senbio/panier";
                  </script> ';
            }
             
         }
      }
      else
      {
         return '<script>
                  alert("Inscription echouée");
                  history.back();
                  </script> ';
      }
  }
  function displaydeconnecter(){
       unset($_SESSION['user']);

       return header("Location:".BASE_URL.SP."produit");
  }

  function displayprofil(){

    $result = '<ul class="list-group">
  <li class="list-group-item">Nom: '.$_SESSION["user"]["NomUti"].'</li>
  <li class="list-group-item">Prénom: '.$_SESSION["user"]["PrenomUti"].'</li>
  <li class="list-group-item">Téléphone: '.$_SESSION["user"]["TelUti"].'</li>
  <li class="list-group-item">Adresse: '.$_SESSION["user"]["AddUti"].'</li>
  <li class="list-group-item">Email: '.$_SESSION["user"]["MailUti"].'</li>
</ul>


<div class ="mt-2">
<a href="'.BASE_URL.SP."update".'" class="btn btn-block btn-primary">Mettre à jour mes données</a>
</div>

';


    return $result;
  }
  function displayupdate()
  {
     $result ='<form method="post" action="actionUpdate" class ="col-md-6">
          <fieldset>
            <legend>Remplir les champs</legend>
            <div>Sélectionnez votre sexe<label>*</label></div>
            <select>
              <option selected="true">Sexe</option>
              <option>M</option>
              <option>F</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div >Nom<label>*</label></div>
            <input type="text" name="NomUti" required value="'.$_SESSION["user"]["NomUti"].'" class="forme" ><br>
            <div>Prénom<label>*</label></div>
            <input type="text" name="PrenomUti" required value="'.$_SESSION["user"]["PrenomUti"].'" class="forme" ><br>
            <div>Téléphone<label>*</label></div>
            <input type="tel" name="TelUti" required value="'.$_SESSION["user"]["TelUti"].'" class="forme"><br>
            <div>Email<label>*</label></div>
            <input type="email" name="MailUti" required value="'.$_SESSION["user"]["MailUti"].'" class="forme"><br>
            <div>Adresse<label>*</label></div>
            <input type="text" name="AddUti" required value="'.$_SESSION["user"]["AddUti"].'" class="forme" placeholder="Région,Departement"><br>
            
            <br><br>
            <input type="submit"  value="Mettre à jour">
            <input type="reset"  value="Reinitialiser">
          </fieldset>
        </form>';

     return $result;
  }

  function displayactionUpdate()
  {
      global $model;
      $_POST["idUti"] = $_SESSION['user']['idUti'];
      $dataUp = $model->UpdateInfoClients($_POST);

       if ($dataUp) {
        $_SESSION['user'] = $model->RecupererUtilisateur($_SESSION['user']['idUti']);
           $result = '<script>
                  alert("Mise à jour reussie ");
                  location.href = "/Senbio/accueil";
                  </script> ';
       }
       else
      {
           $result = '<script>
                  alert("Mise à jour echouée ");
                  location.href = "/Senbio/update";
                  </script> ';      }
      

      return $result;
  }


 ?>