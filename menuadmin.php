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
			
			 <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;"></a>
			 <a href="pagepanier.php" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
		
	</div>
	
	<div id="section">

		<center>
		
			<p style="background-color: white; color: #469533;  font-size: 200%;">Coucou Admin</p>
			<p> Veux-tu consulter les vendeurs inscrits sur la page ou ajouter des produits ?<P>
			<a href= "interface-site-coadmin.php"> 
				<img class="home" src="home.png">
			</a>

			<button type="submit" class=" btn " type="button"><a href="pageadmin.php"> Consulter </a>  </button>
<?php 
session_start();
$_SESSION['admin'] = 0; ?>

 			 <button type="submit" class=" btn " type="button"><a href="AjoutItem.php"> Ajouter des produits</a>  </button>
			
			 
			
</div>

</div>
</div>
<br><br><br>

           


			

		</center> 
	</div>
		
	<div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 
	</div>

<?php 
			
			if($_SESSION['utilisateur']==0 || $_SESSION['utilisateur']== null)
			{?><a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;">Mon compte</a><?php  }
			else{
			$database = "projectweb";
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            
            $login = $_SESSION['utilisateur'];
            if ($db_found)
             {
            $sql = "SELECT ID,Login FROM admin WHERE ID LIKE '%$login%'";
            $result = mysqli_query($db_handle, $sql);
           $data= mysqli_fetch_assoc($result);
           ?>
           <a href="decoAdmin.php" style="color: black; position : absolute; top: 20px; left: 1250px;"><?php echo $data['Login']; ?></a>
           <?php 
mysqli_close($db_handle);
}}
			?>




</body>
</html>