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
			
			<?php 
			session_start();
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
           <a href="decoAcheteur.php" style="color: black; position : absolute; top: 20px; left: 1250px;"><?php echo $data['Login']; ?></a>
           <?php 
mysqli_close($db_handle);
}}
			?>
			
			 <a href="pagepanier.php" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
                <!-- boutton plusieur choix --> 
                
                
                
	<div id="nav">
         <button type="submit" class=" btn " type="button"><a href="interface-site.html"> Accueil </a>  </button>
        
        <button type="submit" class=" btn " type="button"><a href="Livre.php"> Livre </a>  </button>
        
        <button type="submit" class=" btn" type="button"><a href="Musique.php">  Musique </a></button>
        
        
        <button type="submit" class=" btn " type="button"><a href="sport.php"> Sport et Loisirs </a> </button>
        
     
        <button type="submit" class=" btn  " type="button"> <a href="vetementH.php"> Vetements </a></button>
        

        
         	</div> 
	<div id="section">
	
         <div id="flash"> 
        
       
	<br> <br> <br> <br> 
			<a href="venteflash.html" style="background-color: red; color: white;  font-size: 200%;">VENTE FLASH!! </a> 
 </div>
			<br> 
        
        <center>
			<img class="sandales" src="sandales.jpg" >
			
			<img class="theatre" src="theatre.png">
			
			<img class="tv" src="tv.png">
        
			     </center>
	
	</div>
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 37, quai de Grenelle, 75015 Paris, France <br>
        <a href="mailto: hu.thomas.mairui@gmail.com"> 
        Nous envoyé un mail 
        </a> <br> 
        
 
 +33 01 02 03 04 05 <br>
 +33 01 03 02 05 04
	</div>




</body>