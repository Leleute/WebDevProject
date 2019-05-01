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
<form action = "pageadmin.php" method="post">
<form action = "pageadmin.php" method="post">
	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
			<img class="ece" src="ece.jpg">
			
			 <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
			 <a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
	
	<div id="section">
	<center>
			
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Vendeur(s) inscrits</p>
			<a href= "interface-site.php"> 
				<img class="home" src="home.png">
			</a>

			
			<?php
			$database = "projectweb";
			$db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM vendeur";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            	 
            	 
            	
			 
			 <div class="col-md-4">
<div class="thumbnail">
<a href="<?php echo $donnees['PdP']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdP']; ?>" style ="width: 50%;">
</a>
<a href="<?php echo $donnees['PdC']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdC']; ?>" style ="width: 50%;">
</a>
<div class="caption">
<h2><?php echo $donnees['ID']; ?> </h2>
Pseudo : <?php echo $donnees['Pseudo']; ?> <br>
Email : <?php echo $donnees['Email']; ?> <br>
Nom : <?php echo $donnees['Nom']; ?> <br>


 			
			<FORM>
			<input class="Supprimer vendeur" 
			 type="button"
			 value="SupprimerVendeur">
	
		
			</FORM>
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



			

		</center> 
		
	</div>
		
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>






</body>
</html>




