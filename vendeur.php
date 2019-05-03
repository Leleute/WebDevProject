<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>ECE AMAZON</title>	
	<link rel="stylesheet" type="text/css" href="vetstyleH.css">
	<style >	

	</style>
</head>
<body>
    
 
        
    
    </div>
	<?php
	$vendeurID = 1;
	$database = "projectweb";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{
		$sql = "SELECT * FROM vendeur";
		$sql .= " WHERE ID LIKE '%$vendeurID%'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo "Vous etes : " . "<br>";
			echo $data['Nom'] . "<br>";
			echo $data['Email'] . "<br>";
			echo $data['Login'] . "<br>";
			?>
	<img class="PdP" src="bdd/<?php echo $data['PdP']; ?>" style = "width: 50%;">
	<img class="PdP" src="bdd/><?php echo $data['PdC']; ?>" style = "width: 50%;">
	<?php
		}
	}
	?>
	 <div class="row">  
        <div class="col-sm-3"> 
        	<h4>Livres</h4>

	<?php
	$database = "projectweb";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{
		$sql = "SELECT * FROM livres";
		$sql .= " WHERE IDvendeur LIKE '%$vendeurID%'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			/*echo $data['Taille']*/
			echo $data['Nom']. "<br>";
			echo $data['Prix'] . "<br>";
            echo $data['Description'] . "<br>";
			echo $data['Auteur'] . "<br>";
			echo $data['Editeur'] . "<br>";
			echo $data['Date'] . "<br>";
			
           
			?>
	<img class="PdP" src="imageslivres/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
	<?php
		}
	}
	?>


       </div>
       <div class="col-sm-3"> 
       	<h4>Musiques</h4>
       	<?php
	$vendeurID =12;
	$database = "projectweb";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{
		$sql = "SELECT * FROM musiques";
		$sql .= " WHERE IDvendeur LIKE '%$vendeurID%'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo $data['Nom']. "<br>";
			echo $data['Prix'] . "<br>";
			echo $data['Artiste'] . "<br>";
			echo $data['Label'] . "<br>";
			echo $data['Date'] . "<br>";
			echo $data['Description'] . "<br>";
			?>
	<img class="PdP" src="imagesmusiques/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
	<?php
		}
	}
	?>
       </div>

       <div class="col-sm-3"> 
       	<h4>Vos sports et Loisirs</h4>
       	<?php
	$database = "projectweb";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{
		$sql = "SELECT * FROM sportetloisir";
		$sql .= " WHERE IDvendeur LIKE '%$vendeurID%'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo $data['Nom']. "<br>";
			echo $data['Prix'] . "<br>";
			echo $data['Description'] . "<br>";
			?>
	<img class="PdP" src="imagessetl/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
	<?php
		}
	}
	?>
       </div>

       <div class="col-sm-3"> 
       	<h4>Vetements</h4>
       	<?php
	$database = "projectweb";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{
		$sql = "SELECT * FROM vetement";
		$sql .= " WHERE IDvendeur LIKE '%$vendeurID%'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
			echo $data['Nom']. "<br>";
			echo $data['Prix'] . "<br>";
			echo $data['Taille'] . "<br>";
			echo $data['Sexe'] . "<br>";
			echo $data['Couleur'] . "<br>";
			echo $data['Description'] . "<br>";
			?>
	<img class="PdP" src="imagesvetement/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		    <?php
    session_start();
$IDach = $_SESSION["utilisateur"];
//$IDach = $_SESSION["utilisateur"];
if(!empty($_POST['Ajouter Item'])) {
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
//*** Partie Recherche d'un livre ***
//*** Partie Ajout d'un nouveau livre ***

$IDobj = $_POST['Test'];
/*$categorie = "livres";

$sql = "INSERT INTO panier(ID, IDAcheteur, IDObjet, categorie)
 VALUES(Null, '$IDach', '$IDobj', '$categorie')";
$result1 = mysqli_query($db_handle, $sql);
echo "Fonctionne <br>";
$_POST['Test'] = Null;
//on affiche le livre ajouté$sql = "SELECT * FROM employes";

//fermer la connexion
    // ou echo afficher();*/
}
?>
	<input type="submit" name="Test" value="<?php echo $data['ID']?>">
	<form>
	<?php

		}
	}
	?>
       </div>
    </div>


 
	<button type="submit" class=" btn " type="button"><a href="interface-site.html"> Ajouter Item </a>  </button>

</body>
</html>
