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
	</style>
</head>

<body>

	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			
			<img class="ece" src="ece.jpg">
			
			 
		
		
	</div>
	
	<div id="section">
	<center>
			
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Se Déconnecter T T</p>
			<a href= "interface-site-covend.php"
				
			> <img class="home" src="home.png"></a>
				
			

			<div class= centre2>
<h2 class="text-center">Deconnexion</h2>

<?php 
			$database = "projectweb";
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            session_start();
            $login = $_SESSION['utilisateur'];
            if ($db_found)
             {
            $sql = "SELECT ID,Login FROM vendeur WHERE ID LIKE '%$login%'";
            $result = mysqli_query($db_handle, $sql);
           $data= mysqli_fetch_assoc($result);
           ?>
           <?php echo $data['Login']; ?> <br><br>
           <?php 
mysqli_close($db_handle);
}
			?>


 <form action="traitementDecoVendeur.php" method="post">
<input type="submit" name="buttondeco" value="Se deconnecter">
 </form>
 <a href="interface-site-co.php">
 	<input type="button" name="buttondeco" value="rester connecte ">
 </a>

	</center>
			
	</div>		
		
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>






</body>
</html>





 
 
