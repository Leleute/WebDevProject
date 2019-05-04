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
	.aucentre {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
    background-color: #DAB098; 
  border: 1px solid #DAB098;
  border-radius: 1em;
}
	</style>
</head>

<body>
<form action = "pageadmin.php" method="post">
<form action = "pageadmin.php" method="post">
    
	<?php  
$id = isset($_POST["ID"])? $_POST["ID"] : "";
$database = "projectweb";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
$db_found = mysqli_select_db($db_handle, $database);
//*** Partie Recherche d'un vendeur *

//*** Partie Ajout d'un nouveau vendeur *

if ($db_found) { 
	session_start();
	$_SESSION['utilisateur'] = 99;
	if($_SESSION['admin'] ==1)
	{

	$sql = "SELECT * FROM vendeur";
if ($id != "") {
$sql .= " WHERE ID LIKE '%$id%'";
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) == 0) {
//le livre n'existe pas
} else {
    /// supprime le vendeur 
$sql = "DELETE FROM vendeur";
$sql .= " WHERE ID = $id";
$result = mysqli_query($db_handle, $sql);


}
}
}
else { echo "Database not found"; }



//fermer la connexion
mysqli_close($db_handle);
?>

    <!-- en tete --> 
	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
		
			<img class="ece" src="ece.jpg">
			
			 <a href="interface-site.html" style="color: black; position : absolute; top: 20px; left: 1250px;">Deconnection</a>
			
		
		
	</div>
	
	<div id="section">
	<center>
			
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Vendeur(s) inscrits</p>
			
			<table>
				
				<td style="text-align: center; padding-left: 200px;">
                    <!-- base de donnée  afficher les vendeurs sur le coté--> 
                    
					<?php
			$database = "projectweb";
			$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM vendeur";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            	 
            	 
            	
			<div>
			 
			 <div class="col-md-4">
<div class="thumbnail">
<a href="<?php echo $donnees['PdP']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdP']; ?>" style ="width: 50%;">
</a>
<a href="<?php echo $donnees['PdC']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdC']; ?>" style ="width: 50%;">
</a>
<div class="caption">
<h2>ID: <?php echo $donnees['ID']; ?> </h2>
Pseudo : <?php echo $donnees['Login']; ?> <br>
Email : <?php echo $donnees['Email']; ?> <br>
Nom : <?php echo $donnees['Nom']; ?> <br>


 			
			
              

			</div>
</div>

</div>

<br><br><br>

            <?php

            }
            	
        }
        else {
echo "Database not found";
}
mysqli_close($db_handle);
?>

				</td>
				<td style="text-align: center;padding-right: 200px">
					  <div class="aucentre">
					 <form action="pageadmin.php" method="post">
                        
                    <table> 
                    
                     <h5> Supprimer un vendeur</h5>
					 
                        
                        <tr> 
                        
                        <td> Saisir son ID : </td>
                            <td> <input type="text" name="ID"> </td>
                        </tr>
                         <tr>
                        <td> <br>  </td>
                    </tr>
                        
                     <tr>
                        <td> <br> <br> </td>
                    </tr>
                         <td colspan="2" align="center">
                <input type="submit" name="button" value="Supprimer">
                </td>
                        <?php 
                        $_SESSION['admin'] =1;
                         ?>
                    
                    </table>
                    
                    </form>
                </div>
				</td>
			</table>

			
			


			

		</center> 
		
	</div>
    
    
	<?php
{
	if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
	{
		?>
		<a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
		<?php  
	}
	else
	{
		$database = "projectweb";
        $db_handle = mysqli_connect('localhost:8889', 'root', 'root', 'projectweb');
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
    <!-- code a moddifié --> 
    
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
        $db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
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
		$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
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
		$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
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
		$db_handle = mysqli_connect('localhost:8889', 'root', 'roor','projectweb');
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
                    
	<input type="submit" name="Test" value="<?php echo $data['ID']?>">
	<form> 
	<button type="submit" class=" btn " type="button"><a href="AjoutItem.php"> Ajouter Item </a>  </button>
	</form>
	
	</div>
		
                    
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 37, quai de Grenelle, 75015 Paris, France <br>
        <a href="mailto: hu.thomas.mairui@gmail.com"> 
        Nous envoyé un mail 
        </a> <br> 
        
 
 +33 01 02 03 04 05 <br>

	</div>






</body>
</html>