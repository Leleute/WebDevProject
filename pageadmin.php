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
	.aucentre {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
    background-color: #DAB098; 
  border: 1px solid #DAB098;
  border-radius: 1em;
}
	</style>
</head>

<body>
    
    <a href= "menuadmin.php">
    <img class="home" src="home.png"></a>
    
<form action = "pageadmin.php" method="post">
<form action = "pageadmin.php" method="post">
    
	<?php  
$id = isset($_POST["ID"])? $_POST["ID"] : "";
$database = "projectweb";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
$db_found = mysqli_select_db($db_handle, $database);
//*** Partie Recherche d'un vendeur***

//*** Partie suppresion d'un vendeur ***

if ($db_found) { 
	session_start();
	if($_SESSION['admin'] ==1)
	{
	if ($_POST["button"]) {
	$sql = "SELECT * FROM vendeur";
if ($id != "") {
$sql .= " WHERE ID LIKE '%$id%'";
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) == 0) {
//le livre n'existe pas
} else {
$sql = "DELETE FROM vendeur";
$sql .= " WHERE ID = $id";
$result = mysqli_query($db_handle, $sql);

}
}
}
}
    
else { echo "Database not found"; }



//fermer la connexion
mysqli_close($db_handle);
?>

	<div id="header">
		<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
		
			<img class="ece" src="ece.jpg">
			
			 <a href="interface-site.html" style="color: black; position : absolute; top: 20px; left: 1250px;">Deconnection</a>
			
		
		
	</div>
	
	<div id="section">
	<center>
			
		 <p style="background-color: white; color: #469533;  font-size: 200%;">Vendeur(s) inscrits</p>
			
			<table>
				
				<td style="text-align: center; padding-left: 200px;">
					<?php
			$database = "projectweb";
			$db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
            $sql = "SELECT * FROM vendeur";
            $result = mysqli_query($db_handle, $sql);

            while ($donnees = mysqli_fetch_assoc($result))
            {
            	?>
            	 
            	 
            	
			 
			 <div class="col-md-4">
<div class="thumbnail">
<a href="<?php echo $donnees['PdP']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdP']; ?>" style ="width: 50%;">
</a>
<a href="<?php echo $donnees['PdC']; ?>" target="_blank">
<img class="livresvente" src="<?php echo $donnees['PdC']; ?>" style ="width: 50%;">
</a>
<div class="caption">
<h2>ID: <?php echo $donnees['ID']; ?> </h2>
Pseudo : <?php echo $donnees['Login']; ?> <br>
Email : <?php echo $donnees['Email']; ?> <br>
Nom : <?php echo $donnees['Nom']; ?> <br>


 			
			
              

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

				</td>
				<td style="text-align: center;padding-right: 200px">
					  <div class="aucentre">
					 <form action="pageadmin.php" method="post">
                        
                    <table> 
                    
                     <h5> Supprimer un vendeur</h5>
					 
                        
                        <tr> 
                        
                        <td> Saisir son ID : </td>
                            <td> <input type="text" name="ID"> </td>
                        </tr>
                         <tr>
                        <td> <br>  </td>
                    </tr>
                        
                     <tr>
                        <td> <br> <br> </td>
                    </tr>
                         <td colspan="2" align="center">
                <input type="submit" name="button" value="Supprimer">
                </td>
                        <?php 
                        $_SESSION['admin'] =1;
                         ?>
                    
                    </table>
                    
                    </form>
                </div>
				</td>
			</table>

			
			


			

		</center> 
		
	</div>
		
	 <div id="footer">
		Droit d'auteur | Copyright &copy; 2019, ECE AMAZON 37, quai de Grenelle, 75015 Paris, France <br>
        <a href="mailto: hu.thomas.mairui@gmail.com"> 
        Nous envoyé un mail 
        </a> <br> 
        
 
 +33 01 02 03 04 05 <br>
 
	</div>




</body>
</html>




