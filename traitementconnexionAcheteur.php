
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css" >
        
        .color{ 
        background-color: azure; 
            height: 800px; 
        }
        h2{ 
        text-align: center; 
        }
       
        .aucentre {
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}
       
    </style>
</head>    
    
<body>
 <div id="header">
        <h1>BIENVENUE A ECE AMAZON </h1>
            
            <img class="ece" src="ece.jpg">
            
             
         
    </div>
                
          
        
        <div class="color">  
        <br><br><br>
      <div class="aucentre">



 <?php
$login = isset($_POST["login1"])? $_POST["login1"] : "";

$mdp = isset($_POST["mdp1"])? $_POST["mdp1"] : "";

$database = "projectweb";
            $db_handle = mysqli_connect('localhost', 'root', '');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($_POST["buttonCoAch"]) {
            if ($db_found)
             {
            $sql = "SELECT Login,Mdp,ID FROM acheteur WHERE Login LIKE '%$login%' AND Mdp  LIKE '%$mdp%'";
            $result = mysqli_query($db_handle, $sql);

           if (mysqli_num_rows($result) == 0) {
//l'acheteur recherché n'existe pas
echo "Acheteur not found";
} else {
	
            $data= mysqli_fetch_assoc($result);

    session_start();


$_SESSION['utilisateur'] = $data['ID'];
?>

			
			<br><br>
 <table> 
                    
                     <h5> Vous etes connecté</h5><br><br>
                        <p>Bienvenue <?php echo " ".$data['Login']; ?></p>
                       
                        <a href= "interface-site.php"> 
				Retour à la page de vente
			</a>
                    
                    </table>
                    
                 
                
            
                </div>
                </div>
                <?php
}
}}
mysqli_close($db_handle);


?>



               
                
                
                <div class="col-sm-2">  </div>
                
           
            
         
    
      <div id="footer">
        Droit d'auteur | Copyright &copy; 2019, Mouna , Matthieu, Pablo et Thomas 
    </div>


</body>
</html>