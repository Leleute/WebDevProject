<!DOCTYPE html> 

<html>
<head> 
    <meta charset="utf-8"> 
    <title> ECE Amazon</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
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

    <style type="text/css"> 
        
             .centre2 {
  margin: 0 auto;
  width: 800px;
  padding: 1em;
  background-color: #DAB098; 
  border: 1px solid #CCC;
  border-radius: 1em;
    
        
}
        h3{
            text-align: center; 
        }
    </style>
    </head>
    
    
    <body> 
 
	<div id="header">
        
        
        <h1>BIENVENUE A ECE AMAZON </h1>
    
        

    <img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
        
        <div id="logo"> 
        <img class="ece" src="ece.jpg">
        </div>
        
    <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1260px;">Mon compte</a>
        
			 <a href="pagepanier.php" style="color: black; position : absolute; top: 80px; left: 1260px;">Mon panier</a>
    
    <a href= "interface-site.html">
                <img class="home" src="home.png"></a>
    <!-- Menu --> 
        
       <ul id="menu">
           
	<li><a href="#">Categorie</a>
		<ul>
			<li><a href="Livre.php">Livres</a></li>
			<li><a href="Musique.php">Musique</a></li>
			<li><a href="Sport.php">Sports et Loisirs</a></li>
			<li><a href="vetementH.php">Vetements</a></li>
		</ul>
	</li>
	<li><a href="#">Connexion</a>
		<ul>
			<li><a href="connexionAdmin.php">Admin</a></li>
			<li><a href="connexionAcheteur.php">Acheteur</a></li>
			<li><a href="connextionVendeur.php">Vendeur</a></li>
			
			 <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;"></a>
			 <a href="pagepanier.php" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		</ul>
	</li>
	<li><a href="#">Inscription</a>
		<ul>
			<li><a href="CreaCompteAch.html">Acheteur</a></li>
			<li><a href="CreaCompteVendeur.html">Vendeur</a></li>
		</ul>
	</li>
	<li><a href="qui.html">Qui Sommes Nous</a>
		
	</li>
           <li><a href="contact.php">Contact</a>
		
	</li>
</ul>
        </div>     
          <center>
              <br>
      	<p style="background-color: white; color: #469533;  font-size: 200%;">Coucou Admin</p>
			
        </center>
	
	<div id="section">

		<center>
		
			<p style="background-color: white; color: #469533;  font-size: 200%;">Coucou Admin</p>
			<p> Veux-tu consulter les vendeurs inscrits sur la page ou ajouter des produits ?<P>
			<a href= "interface-site-coadmin.php"> 
				<img class="home" src="home.png">
			</a>

			<button type="submit" class=" btn " type="button"><a href="pageadmin.php"><B> Consulter le profil des Vendeurs </B></a>  </button>
<?php 
session_start();
$_SESSION['admin'] = 0; ?>

 			 <button type="submit" class=" btn " type="button"><a href="AjoutItem.php"> Ajouter des produits</a>  </button>
			
			 
			
</div>

</div>
</div>


           


			

		</center> 
	</div>
		
	  <div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 37, quai de Grenelle, 75015 Paris, France <br>
        <a href="mailto: hu.thomas.mairui@gmail.com"> 
        Nous envoyé un mail 
        </a> <br> 
        
 
 +33 01 02 03 04 05 <br>
 
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