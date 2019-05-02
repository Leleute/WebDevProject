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
      <img class="ece" src="ece.jpg">
      
       
    
            
             
         
    </div>

  <div id="section">
                
          
        
        <div class="color">  
        <br><br><br>
      <div class="aucentre">



 <?php

            if ($_POST["buttondeco"]) {
            session_start();
            $_SESSION['utilisateur']=0;
            ?>
            <h2>A bientot !</h2>
             <a href= "interface-site-co.php"> 
        Retour à la page de vente
      </a><?php

          }

            ?>



               
                
                
                <div class="col-sm-2">  </div>
                
    </div>
            
         
    
      <div id="footer">
        Droit d'auteur | Copyright &copy; 2019, Mouna , Matthieu, Pablo et Thomas 
    </div>


</body>
</html>