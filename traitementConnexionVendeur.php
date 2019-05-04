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
	
	
     
		
    <style type="text/css" >
        
       
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
    
   
    <div id="header">
        
			<h1>BIENVENUE A ECE AMAZON </h1>
			<img class="account" src="account.png" width="30" height="30">
			<img class="basket" src="basket.png" width="30" height="30">
			<img class="ece" src="ece.jpg">
			
			 <a href="Choix.php" style="color: black; position : absolute; top: 20px; left: 1250px;"></a>
			 <a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
            
             
         
    </div>

	<div id="section">
                
          
        
        <div class="color">  
        <br><br><br>
      <div class="aucentre">



 <?php
          
$login = isset($_POST["login1"])? $_POST["login1"] : "";
$mdp = isset($_POST["mdp1"])? $_POST["mdp1"] : "";
$database = "projectweb";
            $db_handle = mysqli_connect('localhost:8889', 'root', 'root','projectweb');
            $db_found = mysqli_select_db($db_handle, $database);
          
            if ($_POST["buttonCoAch"]) {
                
            if ($db_found)
             {
                
            $sql = "SELECT Login,Mdp,ID FROM vendeur WHERE Login LIKE '%$login%' AND Mdp  LIKE '%$mdp%'";
            $result = mysqli_query($db_handle, $sql);
           if (mysqli_num_rows($result) == 0)
           {
//l'acheteur recherché n'existe pas
echo "Vendeur not found";
} 
        
	
            $data= mysqli_fetch_assoc($result);
    session_start();
$_SESSION['utilisateur'] = $data['ID'];
?>

			
			<br><br>
 <table> 
                    
                     <h5> Vous etes connecté</h5><br><br>
                        <p>Bienvenue <?php echo " ".$data['Login']; ?></p>
                       
                        <a href= "vendeur.php"> 
				Allez a votre page de vendeur 
			</a>
                    
                    </table>
                    
                 
                
            
                </div>
                </div>
                
}
}}
mysqli_close($db_handle);
?>


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
            $sql = "SELECT ID,Login FROM vendeur WHERE ID LIKE '%$login%'";
            $result = mysqli_query($db_handle, $sql);
           $data= mysqli_fetch_assoc($result);
           ?>
           <a href="decoVendeur.php" style="color: black; position : absolute; top: 20px; left: 1250px;"><?php echo $data['Login']; ?></a>
           <?php 
mysqli_close($db_handle);
}}
			?>


               
                
                
                <div class="col-sm-2">  </div>
                
    </div>
            
         
    
      <div id="footer">
        Droit d'auteur | Copyright &copy; 2019, Mouna , Matthieu, Pablo et Thomas 
    </div>


</body>
</html>