<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
	
	
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
			
			
			 <a href="#" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a>
			 <a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
                <!-- boutton plusieur choix --> 
                
                
         <div>      
	<div id="nav">
         <button type="submit" class=" btn " type="button"><a href="interface-site.html"> Accueil </a>  </button>
        
        <button type="submit" class=" btn " type="button"><a href="Livre.php"> Livre </a>  </button>
        
        <button type="submit" class=" btn" type="button"><a href="Musique.php">  Musique </a></button>
        
        
        <button type="submit" class=" btn " type="button"><a href="sport.php"> Sport et Loisirs </a> </button>
        
     
        <button type="submit" class=" btn  " type="button"> <a href="vetements.php"> Vetements </a></button>
        

        
        <button type="submit" class=" btn" type="button"> <a href="contact.php"> Contact </a></button>
         
         	</div> 
    </div>  
	<div id="section">

		<center>
		
			<p style="background-color:#EFD3C5; color: #469533;  font-size: 200%;">Sports et loisirs</p>
            <br><br> 
			
			
			<?php
			$database = "projectweb";
			$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM sportetloisir";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            	 
            	 
            	  <div class="row"> 
            	 
            	 
            	<div class="col-xs-4"> </div>
			 
			 
			 <div class="col-xs-5">
<div class="thumbnail">
<a href="<?php echo $donnees['AdressePhoto']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['AdressePhoto']; ?>" style ="width: 50%;">
</a>
<div class="caption">
<h2><?php echo $donnees['Nom']; ?></h2>
<ul>
<li>Prix : <?php echo $donnees['Prix']; ?></li>

</ul>
<p> <?php echo $donnees['Description']; ?></p>
 			<FORM>
			<input class="BoutonAjoutPanier"
			 type="button"
			 value="Ajouter au Panier">
			</FORM>
</div>

</div>
</div>
                      <div class="col-xs-3"> </div>
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