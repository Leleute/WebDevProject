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
        
        h2{ 
        text-align: center; 
        }
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
            $sql = "SELECT ID,Login FROM acheteur WHERE ID LIKE '%$login%'";
            $result = mysqli_query($db_handle, $sql);
           $data= mysqli_fetch_assoc($result);
           ?>
           <a href="decoAcheteur.php" style="color: black; position : absolute; top: 20px; left: 1250px;"><?php echo $data['Login']; ?></a>
           <?php 
mysqli_close($db_handle);
}}?>
			 <a href="#" style="color: black; position : absolute; top: 50px; left: 1250px;">Mon panier</a>
		
            
             
         
    </div>
                
          
    <div id="section">  
        <div class="color">  
        <br><br><br>
      <div class="aucentre">
        
        
                    <form action="traitementconnexionAcheteur.php" method="post">
                        
                  
                    
                <table> 
                    <br>
                    <h2>Facturation : </h2>
  <h2><?php echo $_SESSION["facture"];?> €</h2>
           <div>          
    <tr>
                
            <td>Type : <br> </td>
               </tr> 
            <tr> 
                   <td><input type="radio" name="typeC" value="Visa"  checked>  <img src="visa.png" alt="visa">  
                </td>  
                    </tr>
                    
                     <tr> 
                   <td><input type="radio" name="typeC" value="paypal" checked>  <img src="paypal.png" alt="visa">  
                </td>  
                      
                    </tr>
                    
                   
                       <tr> 
                   <td><input type="radio" name="typeC" value="mastercard" checked>  <img src="mastercard%20.png" alt="visa">  
                </td>  
                    </tr>
                    
          
               
                    </div>
                    
                    
                   <tr>  
        <td>Numero : </td>
        <td><input type="number" name="numC"></td>
      </tr>
      <tr>
        <td>Nom Carte : </td>
        <td><input type="text" name="nomC"></td>
      </tr>
      
      <tr>
        <td>Date Expiration : </td>

        <td><input type="date" name="dateC"></td>

        

      </tr>
      <tr>
        <td>Code Securite : </td>
        <td><input type="number" name="codeC"></td>
      </tr>
      <tr>
                        <td> <br> <br> </td>
                    </tr>
                    
                    <td colspan="2" align="center">
        <input type="submit" name="button2" value="Passer la commande">
                </td>
                    
                    
                    <tr>
                        <td> <br> <br> </td>
                    </tr>
                   
                    </table>
                    
                    </form>
                
            
                </div>
                </div>

               
                
                
                <div class="col-sm-2">  </div>
                
           
        </div>    
         
    
      <div id="footer">
        Droit d'auteur | Copyright &copy; 2019, Mouna , Matthieu, Pablo et Thomas 
    </div>


</body>
</html>