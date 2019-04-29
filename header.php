<?php 

require 'db.class.php'; 
$DB= new DB(''); 

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ECE AMAZON</title>	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style >	
	</style>
</head>

<body>
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
			<li> <a href= "#"> Livre </a> </li>
			<li> <a href= "#"> Musique </a> </li>
			<li> <a href= "#"> Vetements </a> </li>
			<li> <a href= "#"> Sports et Loisir </a> </li>
		</ul>
	</div>
    </body>
</html>
