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
	<form action = "panier1.php" method="post">

	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
			<img class="ece" src="ece.jpg">
			
			 <a href="#" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
			 <a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
	<div id="nav">
	
		<ul>
			<li> <a href= "test.php"> Livre </a> </li>
			<li> <a href= "Musique.html"> Musique </a> </li>
			<li> <a href= "vetementH.html"> Vetements HOMME </a> </li>
			<li> <a href= "vetementF.html"> Vetements FEMME </a> </li>
			<li> <a href= "Sport.html"> Sports et Loisir </a> </li>
		</ul>
	</div>
	<div id="section">

		<center>
		
			<p style="background-color: white; color: #469533;  font-size: 200%;">Livres</p>
			<a href= "interface-site.html"> 
				<img class="home" src="home.png">
			</a>

			<?php
			$database = "projet-html";
			$db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM livres";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            	 
            	 
            	
			 
			 <div class="col-md-4">
<div class="thumbnail">
<a href="<?php echo $donnees['AdressePhoto']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['AdressePhoto']; ?>" style ="width: 50%;">
</a>
<div class="caption">
<h2><?php echo $donnees['Nom']; ?></h2>
<ul>
<li>Prix : <?php echo $donnees['Prix']; ?></li>
<li>Auteur : <?php echo $donnees['Auteur']; ?></li>
<li>Editeur : <?php echo $donnees['Editeur']; ?></li>
<li>Date : <?php echo $donnees['Date']; ?></li>
</ul>
<p> <?php echo $donnees['Description']; ?></p>
 <FORM>
			<input class="BoutonAjoutPanier" formaction='panier1.php'
			 type="button"
			 value="Ajouter au Panier">
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