<?php 
 	
 	class Data
 	{
 		private $connexion;
 		function __construct()
 		{
 			
 	  try{
 		      $this->connexion = new PDO('mysql:host='.host.';dbname='.database,username,password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));

 	  }catch(PDOException $e){
 		die('impossible de se connecter a la base de donnee');
 	}
  }

 	function count()
  {
    $somme = 0;

    foreach ($_SESSION['panier'] as $key => $value) {
        if ($key == 0) {
          $somme += 1;
                  
      }   
      else
      {
        $somme += $key;
      }     


    }
    return $somme;
    
  }		

  function ajouter($produit_id)
    { 
     
      if (isset($_SESSION['panier'][$produit_id])) {
        $_SESSION['panier'][$produit_id]++;
      }
      else{
        $_SESSION['panier'][$produit_id]=1;
      }
    }

 	function creerUtilisateur($nom ,$prenom,$tel,$add,$mail,$password){
 		
 			$req = "INSERT INTO Utilisateur(NomUti,PrenomUti,TelUti,AddUti,MailUti,password) VALUES (:NomUti,:PrenomUti,:TelUti,:AddUti, :MailUti,:password)";
 			try
 			{
 			$result = $this->connexion->prepare($req);

 			$var = $result->execute(array(
 				':NomUti'=> $nom ,
 				':PrenomUti' => $prenom,
 				':TelUti' => $tel,
 				':AddUti'=> $add,
 				':MailUti'=>$mail,
 				':password' => sha1($password)
 			));
 			if ($var) {
 				return true;
 			}
 			else
 			{
 				return false;
 			}
 		}
 		catch(PDOException $e){
 		     return null;
 	}

 	}

 	function authentifier($mail,$password){
 		$sql = "select * from Utilisateur where MailUti = :MailUti";
 		try
 		{
 		$result = $this->connexion->prepare($sql);

 		$result->execute(array(':MailUti' => $mail));

 		$data = $result->fetch(PDO::FETCH_ASSOC);
 		if ($data && ($data['password']== sha1($password))) {
 			//destruction du champ password

 			unset($data['password']);
 			return $data;
 		}
 		else
 			{
 				return false;
 			}
 	}
 	catch(PDOException $e){
 		     return null;
 	}

 }

 function creerCommande($idUti,$id,$montant,$quantite){
 	$req = "INSERT INTO Commande (idUti,id,Montant,quantite) VALUES (:idUti,:id,:Montant, :quantite)";

 	try
 		{
 		$result = $this->connexion->prepare($req);

 		$var = $result->execute(array(':idUti' => $idUti,
 						':id'=>$id,
 						':Montant' => $montant,
            ':quantite' => $quantite 
 					));
 		if ($var) {
 			return true;
 		}
 		else
 			{
 				return false;
 			}
 		}catch(PDOException $e){
 		     return null;
 	}

 }
  function UpdateInfoClients($tab)
  {
  		$req = "UPDATE `Utilisateur` SET ";
      $id = $tab['idUti'];
     // print_r($id); exit();
      unset($tab['idUti']);
  		try
 		{
 			foreach ($tab as $key => $value) {
        $value = addslashes($value);
 				$req .= " $key = '$value' ,";
 			}
 			$req = substr($req, 0 ,-1);
 			$req .= " where idUti = :idUti";
 			$result = $this->connexion->prepare($req);

 			$var = $result->execute(array('idUti' => $id));


 			if ($var) {
 				return true;
 			}
 			else
 			{
 				return false;
 			}
 		}catch(PDOException $e){
 		     return null;
 		}
  }

   function RecupererCategorie()
   {
   	 	$sql = "select * from Categorie";
   	 	try
 		{
 			$result = $this->connexion->prepare($sql);

 			$var = $result->execute();
 			$data = $result->fetchAll(PDO::FETCH_ASSOC);
 			if ($data) {
 				return $data;
 			}
 			else
 			{
 				return false;
 			}
 		}catch(PDOException $e){
 		     return null;
 		}
   }

   function RecupererProduit($limit = null, $cate = null, $id = null)
  	{
  		$sql = "select * from Produit ";
   	 	try
 		{
      if (!is_null($id)) {
        $sql .= ' WHERE id =  ' .$id;
      }
      if (!is_null($cate)) {
        $sql .= ' WHERE Categorie =  ' .$cate;
      }
 			if (!is_null($limit)) {
 				$sql .= ' LIMIT ' .$limit;
 			}
 			$result = $this->connexion->prepare($sql);

 			$var = $result->execute();
 			$data = $result->fetchAll(PDO::FETCH_ASSOC);
 			if ($data) {
 				return $data;
 			}
 			else
 			{
 				return false;
 			}
 		}catch(PDOException $e){
 		     return null;
 		}

 }
 function RecupererUtilisateur($id)
   {
      $sql = "select * from Utilisateur WHERE idUti = ?";
      try
    {
      $result = $this->connexion->prepare($sql);

      $var = $result->execute(array($id));
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      if ($data) {
        unset($data[0]['password']);
        return $data[0];
      }
      else
      {
        return false;
      }
    }catch(PDOException $e){
         return null;
    }
   }
  


}

 /**
  * 
 
 class  Panier
 {
  private $DB;
    public function __construct($DB)
    {
      if (!isset($_SESSION)) {
        session_start();
      }
      if (!isset($_SESSION['panier'])) {
      $_SESSION['panier']=array();
    }
    $this->DB= $DB;
    }
  
  function Afficherpanier($produit)
    {
      
      $ids=array_keys($_SESSION['panier']);
      if (empty($ids)) {
         return $produit =array();
      }
      else
      {
       return $produit = $this->DB->execute('select * from Produit where id IN ('.implode(',', $ids).')');
      }
    }
 }

 */

 ?>