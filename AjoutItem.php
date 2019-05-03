



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
	.centre1 {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  background-color: #EFCDBA; 
  border: 1px solid #EFCDBA;
  border-radius: 1em;
}
.centre2 {
  margin: 0 auto;
  width: 650px;
  padding: 1em;
  background-color: #DAB098; 
  border: 1px solid #EFCDBA;
  border-radius: 1em;
}
	</style>
</head>

<body>
	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
			<img class="ece" src="ece.jpg">
		
		
	</div>

	<div id="section">
    
	<center>
		
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Creation Items</p><br><br><br>
	
	<a href= "interface-site.html"> 
				<img class="home" src="home.png">
			</a>
			
		<div class= "centre2">
    <table>
    	<?php
    	$statut  = isset($_POST["statut"])?$_POST["statut"] : "";
		if(empty($statut))
		{
		?>
		<form action="AjoutItem.php" method="post">
		<select name="statut">
			<option>Livres</option>
			<option>Musiques</option>
			<option>Sport Et loisir</option>
			<option>Vetements</option>
		</select><br>

		<input type="submit" name="Choix" value="Soumettre">
		<?php
		}
		if($statut == "Livres")
		{
		?>
		<form action="AjoutItem2.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Quantite a creer :</td>
            <td><input type="number" name="quantite"></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prix en Euro :</td>
            <td><input type="number" name="prix"></td>
        </tr>
        <tr>
            <td>Auteur :</td>
            <td><input type="text" name="auteur"></td>
        </tr>
        <tr>
        	<td>Editeur</td>
        	<td><input type="text" name="edit"></td>
        </tr>
        <tr>
            <td>Images : </td>
            <td><input type="file" name="fileToUpload"></td>
        </tr>
        <tr>
            <td>Lien Video :</td>
            <td><input type="text" name="video"></td>
        </tr>
		<tr>
            <td>Date de parution :</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
        	<td>Descritpion</td>
        	<td><input type="text" name="desc"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="button" value="Creez votre Livre">
            </td>
        </tr>
        <?php
    	}
    	if($statut == "Musiques")
    	{
    	?>
    		<form action="AjoutItem2.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Quantite a creer :</td>
            <td><input type="number" name="quantite"></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prix en Euro :</td>
            <td><input type="number" name="prix"></td>
        </tr>
        <tr>
            <td>Artiste :</td>
            <td><input type="text" name="auteur"></td>
        </tr>
        <tr>
        	<td>Label</td>
        	<td><input type="text" name="edit"></td>
        </tr>
        <tr>
            <td>Images : </td>
            <td><input type="file" name="fileToUpload"></td>
        </tr>
        <tr>
            <td>Lien Video :</td>
            <td><input type="text" name="video"></td>
        </tr>
		<tr>
            <td>Date de parution :</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
        	<td>Descritpion</td>
        	<td><input type="text" name="desc"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="button" value="Creez votre Musique">
            </td>
        </tr>
    		
    		<?php
    	}
    	if($statut == "Vetements")
    	{
    	?>
    		<form action="AjoutItem2.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Quantite a creer :</td>
            <td><input type="number" name="quantite"></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prix en Euro :</td>
            <td><input type="number" name="prix"></td>
        </tr>
        <tr>
            <td>Sexe :</td>
            <td><input type="text" name="auteur"></td>
        </tr>
        <tr>
        	<td>Taille</td>
        	<td><input type="number" name="edit"></td>
        </tr>
        <tr>
        	<td>Couleur</td>
        	<td><input type="text" name="couleur"></td>
        </tr>
        <tr>
            <td>Images : </td>
            <td><input type="file" name="fileToUpload"></td>
        </tr>
        <tr>
            <td>Lien Video :</td>
            <td><input type="text" name="video"></td>
        </tr>
        <tr>
        	<td>Descritpion</td>
        	<td><input type="text" name="desc"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="button" value="Creez votre Vetement">
            </td>
        </tr>	
    	<?php 
    	}
    	if($statut == "Sport Et loisir")
    	{
    	?>
    		<form action="AjoutItem2.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Quantite a creer :</td>
            <td><input type="number" name="quantite"></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prix en Euro :</td>
            <td><input type="number" name="prix"></td>
        </tr>
        <tr>
            <td>Images : </td>
            <td><input type="file" name="fileToUpload"></td>
        </tr>
        <tr>
            <td>Lien Video :</td>
            <td><input type="text" name="video"></td>
        </tr>
        <tr>
        	<td>Descritpion</td>
        	<td><input type="text" name="desc"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="button" value="Creez votre Item">
            </td>
        </tr>	
    	<?php 
    	}
    	?>
    </table>
	</div>
	
	</center>
	</div>
	
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>
	
	
</form>
</body>
</html> 


