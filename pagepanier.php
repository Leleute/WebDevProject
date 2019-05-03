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
	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
			<img class="ece" src="ece.jpg">
			
			 <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
			 <a href="pagepanier.php" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
	
	<div id="section">
	<center>
			
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Mon panier</p>
			<a href= "interface-site.html"> 
				<img class="home" src="home.png">
			</a>

			
            	 
            

<br><br><br>
	<?php
	session_start();
	$ach = $_SESSION["utilisateur"];
	$database = "projectweb";
	$prixtot = 0;
			$db_handle = mysqli_connect('localhost', 'root','');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
            	//WHERE Email LIKE '%$email%'"
             {
            $sql = "SELECT * FROM panier WHERE IDAcheteur LIKE '%$ach%'";
            $result = mysqli_query($db_handle, $sql);
		while ($donneesPanier = mysqli_fetch_assoc($result))
            {
            	if($donneesPanier['categorie'] == "livres")
            	{
            		$IDobj = $donneesPanier["IDObjet"];
            		$sqll = "SELECT * FROM livres WHERE ID LIKE '%$IDobj%'";
            		$resultl = mysqli_query($db_handle, $sqll);
            		{
            			while ($donneeslivres = mysqli_fetch_assoc($resultl))
            			{
            				
            				echo $donneeslivres['Nom'];
            				echo "<br>";
            				echo $donneeslivres['Prix'];
            				echo "<br>";
            				?>
            				<img class="PdP" src="imageslivres/<?php echo $donneeslivres['AdressePhoto']; ?>" style = "width: 50%";>;
            				<?php
            				echo "<br>";
            				$prixtot += $donneeslivres['Prix'];

            			}
            		}

            	}
            	if($donneesPanier["categorie"] == "musiques")
            	{

            	}
            	if($donneesPanier["categorie"] == "sports")
            	{

            	}
            	if($donneesPanier["categorie"] == "vetements")
            	{

            	}
            }
            mysqli_close($db_handle);
        }



	?>
	<h1>Prix total  : </h1>
	<h1><?php echo $prixtot; ?></h1>

         

			

		</center> 
		
	</div>
		
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>






</body>
</html>






5