<!DOCTYPE html> 
<html>
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

    </head>
    <body> 
 
	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
    
        
        
        <!-- Menu horizontal deroulant --> 
        

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
           <li><a href="contact.html">Contact</a>
		
	</li>
</ul>
        </div>
	
	<div id="section">

		<center>
		
			<p style="background-color:#EFD3C5; color: #469533;  font-size: 200%; "> <B> Musique</B></p>
            <br><br>
			


			<?php
			$database = "projectweb";
			$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM vetement";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            
            <div class="row"> 
            	 
            	 
            	<div class="col-xs-4"> </div>
			 
			 <div class="col-xs-5">
                 
<div class="thumbnail" style="background-color:#EFD3C5;">
<a href="imagesmusiques/<?php echo $donnees['AdressePhoto']; ?>" target="_blank">
<img class="livresvente" src="imagesmusiques<?php echo $donnees['AdressePhoto']; ?>" style ="width: 50%;"><br><br>
</a>

<div class="caption">
<h2><?php echo $donnees['Nom']; ?></h2>
Sexe : <?php echo $donnees['Sexe']; ?> <br>
Prix : <?php echo $donnees['Prix']; ?> <br>


<a  href="<?php echo $donnees['AdresseVideo']; ?>" target="_blank"> <br>
<video width="240"  height="160" src="<?php echo $donnees['AdresseVideo']; ?>"  controls autobuffer>

</video>
</a>
<p> <?php echo $donnees['Description']; ?></p> 
 			<?php
$IDach = $_SESSION["utilisateur"];
//$IDach = $_SESSION["utilisateur"];
if(!empty($_POST['Test']) && !empty($IDach)) {
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
//*** Partie Recherche d'un livre ***
//*** Partie Ajout d'un nouveau livre ***

$IDobj = $_POST['Test'];
$categorie = "vetements";

$sql = "INSERT INTO panier(ID, IDAcheteur, IDObjet, categorie)
 VALUES(Null, '$IDach', '$IDobj', '$categorie')";
$result1 = mysqli_query($db_handle, $sql);
echo "Fonctionne <br>";
$_POST['Test'] = Null;
//on affiche le livre ajouté$sql = "SELECT * FROM employes";

//fermer la connexion
    // ou echo afficher();
}
?>
 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<input type="hidden" name="id" value="<?php echo $donnees['ID'];?>">
	<input type="submit" name="Test" value="<?php echo $donnees['ID'];?>"
	<form>


</script>
	<FORM>
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
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 37, quai de Grenelle, 75015 Paris, France <br>
        <a href="mailto: hu.thomas.mairui@gmail.com"> 
        Nous envoyé un mail 
        </a> <br> 
        
 
 +33 01 02 03 04 05 <br>
 +33 01 03 02 05 04
	</div>



</body>
</html>