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
	<link rel="stylesheet" type="text/css" href="style.css">
	<style >	
	</style>
</head>

<body>
			<form action = "panier.php" method="post">


	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
		<?php
			$typedecompte = 1;
			if($typedecompte == 1)
			{
			
			echo '<img class="account" src="account.png" width="30" height="30">';
			echo '<img class="basket" src="basket.png" width="30" height="30">';
			echo '<img class="ece" src="ece.jpg">';
			
			 echo '<a href="#" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>';
			 echo '<a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>';
			}
		
	?>	
	</div>
	<div id="nav">
	
		<ul>
			<li> <a href= "Livre.php"> Livre </a> </li>
			<li> <a href= "Musique.php"> Musique </a> </li>
			<li> <a href= "vetementH.php"> Vetements HOMME </a> </li>
			<li> <a href= "vetementF.php"> Vetements FEMME </a> </li>
			<li> <a href= "Sport.php"> Sports et Loisir </a> </li>
		</ul>
	</div>
	<div id="section">
	
	<center>
		
			
	</center>
	</div>
		
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>




</body>
</html>