<?php
?>

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
	<style type="text/css">	
	.centre1 {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  background-color: #EFCDBA; 
  border: 1px solid #CCC;
  border-radius: 1em;
}
.centre2 {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  background-color: #DAB098; 
  border: 1px solid #CCC;
  border-radius: 1em;
}
	</style>
</head>
<body>
    	<title>ECE AMAZON</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style >	
	</style>
</head>

<body>
			<!-- <form action = "panier1.php" method="post">--> 


	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
        
        <div id="logo"> 
        <img class="ece" src="ece.jpg">
        </div>
			
			
			<a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;"></a>
			 <a href="pagepanier.html" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
                <!-- boutton plusieur choix -->           
	
		
	<div id="section">
         
 
        
    
    <div class= centre2>
<?php
{
	
	session_start();
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{
		?>
		<a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
		<?php  
	}
	else
	{
		$database = "projectweb";
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        $id = $_SESSION['utilisateur'];
        if ($db_found)
        {
			$sql = "SELECT * FROM vendeur WHERE ID = '$id'";
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) 
			{
				?>
				<center>	
				<span style= "color: white";  "left: 5px"; > <b>VOUS ETES</b></span>
				</center>	
				<img class="PdP" src="bdd/<?php echo $data['PdP']; ?>" style = "width: 30%"; "left: 120px";>	
				<img class="PdP" src="<?php echo $data['PdC']; ?>" style = "width: 30%"; "position:absolute";><br>	
				Nom : 
				<?php
				echo $data['Nom'] . "<br>";
				?>
				Email : 
				<?php		
				echo $data['Email'] . "<br>"; 
				?>
				Login :  
				<?php
				echo $data['Login'] . "<br>";
				?>	
				</div>
				<?php
				$sql = "SELECT ID,Login FROM acheteur WHERE ID LIKE '%$id%'";
				$result = mysqli_query($db_handle, $sql);
				$data= mysqli_fetch_assoc($result);
				mysqli_close($db_handle);
			}
		}
	}
	?>
	<div class="row">  
	<div class="col-sm-3"> 
	<h4>Livres</h4>
	<?php
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{
		?><a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a><?php  
	}
	else
	{
		$database = "projectweb";
        $db_handle = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($db_handle, $database);
        $login = $_SESSION['utilisateur'];
        if ($db_found)
        {
			$sql = "SELECT * FROM livres";
			$sql .= " WHERE IDvendeur LIKE '%$login'";	
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) 
			{
				echo $data['Nom']. "<br>";
				echo $data['Prix'] . "<br>";
				echo $data['Description'] . "<br>";
				echo $data['Auteur'] . "<br>";
				echo $data['Editeur'] . "<br>";
				echo $data['Date'] . "<br>";
				?>
				<img class="PdP" src="imageslivres/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
				<h6>Supprimer l'objet : <h6>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<input type="submit" name="Test" value="<?php echo $data['ID']?>">
				<?php
				echo $data['ID'];
				if(!empty($_POST['Test']))
				{
					$idobj = $_POST['Test'];
					$sql1 = "DELETE FROM livres";
					$sql1 .= " WHERE ID = $idobj";
					$result1 = mysqli_query($db_handle, $sql1);
					$_POST['Test'] = Null;
				}
			}
		}
	}
	?>
    </div>
	<div class="col-sm-3"> 
	<h4>Musiques</h4>
    <?php
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{
		?>
		<a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
		<?php  
	}
	else
	{
		$database = "projectweb";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);            
		$login = $_SESSION['utilisateur'];
		if ($db_found)
		{
			$sql = "SELECT * FROM musiques";
			$sql .= " WHERE IDvendeur LIKE '%$login'";	
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) 
			{
				echo $data['Nom']. "<br>";
				echo $data['Prix'] . "<br>";
				echo $data['Artiste'] . "<br>";
				echo $data['Label'] . "<br>";
				echo $data['Date'] . "<br>";
				echo $data['Description'] . "<br>";
				if(!empty($_POST['mus']))
				{
					$idobj = $data['ID'];
					$sql1 = "DELETE FROM musiques";
					$sql1 .= " WHERE ID = $idobj";
					$result1 = mysqli_query($db_handle, $sql1);
					$_POST['mus'] = Null;
				}
				?>
				<img class="PdP" src="imagesmusiques/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
				<h6>Supprimer l'objet : <h6>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<input type="submit" name="mus" value="<?php echo $data['ID']?>">
				<?php
			}
		}
	}
	?>
	</div>
	<div class="col-sm-3"> 
    <h4>Vos sports et Loisirs</h4>
    <?php
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{?><a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a><?php  }
	else
	{
		$database = "projectweb";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		$login = $_SESSION['utilisateur'];
		if ($db_found)
		{
			
			$sql = "SELECT * FROM sportetloisir";
			$sql .= " WHERE IDvendeur LIKE '%$login'";
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) 
			{
				echo $data['Nom']. "<br>";
				echo $data['Prix'] . "<br>";
				echo $data['Description'] . "<br>";
				if(!empty($_POST['sport']))
				{
					$idobj = $data['ID'];
					$sql1 = "DELETE FROM sportetloisir";
					$sql1 .= " WHERE ID = $idobj";
					$result1 = mysqli_query($db_handle, $sql1);
					$_POST['sport'] = Null;
				}
				?>
				<img class="PdP" src="imagessport/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
				<h6>Supprimer l'objet : <h6>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<input type="submit" name="sport" value="<?php echo $data['ID']?>">
				<?php
			}
		}
	}
	?>
	</div>
	<div class="col-sm-3"> 
    <h4>Vetements</h4>
    <?php
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{?><a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a><?php  }
	else
	{
		$database = "projectweb";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		$login = $_SESSION['utilisateur'];
		if ($db_found)
		{
			$sql = "SELECT * FROM vetement";
			$sql .= " WHERE IDvendeur LIKE '%$login'";
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result)) 
			{
				echo $data['Nom']. "<br>";
				echo $data['Prix'] . "<br>";
				echo $data['Taille'] . "<br>";
				echo $data['Sexe'] . "<br>";
				echo $data['Couleur'] . "<br>";
				echo $data['Description'] . "<br>";
				if(!empty($_POST['vet']))
				{
					$idobj = $data['ID'];
					$sql1 = "DELETE FROM vetement";
					$sql1 .= " WHERE ID = $idobj";
					$result1 = mysqli_query($db_handle, $sql1);
					$_POST['vet'] = Null;
				}
				?>
				<img class="PdP" src="imagesvetements/<?php echo $data['AdressePhoto']; ?>" style = "width: 50%;">
				<h6>Supprimer l'objet : <h6>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<input type="submit" name="vet" value="<?php echo $data['ID']?>">
				<?php
			}
		}
	}
	?>
	</div>
	<?php
	$IDach = $_SESSION["utilisateur"];
	if(!empty($_POST['Ajouter Item']))
	{
		$IDobj = $_POST['Test'];
	}
}
	
	?>
	
	
	<?php 
			
			if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
			{?><a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a><?php  }
			else{
			$database = "projectweb";
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            
            $login = $_SESSION['utilisateur'];
            if ($db_found)
             {
            $sql = "SELECT ID,Login FROM vendeur WHERE ID LIKE '%$login%'";
            $result = mysqli_query($db_handle, $sql);
           $data= mysqli_fetch_assoc($result);
           ?>
           <a href="decoVendeur.php" style="color: black; position : absolute; top: 20px; left: 1250px;"><?php echo $data['Login']; ?></a>
           <?php 
mysqli_close($db_handle);
}}
			?>
	
	
	
	
	<input type="submit" name="Test" value="<?php echo $data['ID']?>">
	<form> 
	<button type="submit" class=" btn " type="button"><a href="AjoutItem.php"> Ajouter Item </a>  </button>
	</form>
	</body>
	</html>