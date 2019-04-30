<?php require 'header.php'; ?> 

<?php 

var_dump($DB->query('SELECT * FROM produits')); 
?>
    <div id="section" > 
        
        <div class="row" > 
        
             <div class="col-xs-3 col-sm-2.4">
                
        <h5> Livres </h5>
        
<div class="responsive">
  <div class="gallery">
      <ul> 
       <a target="_blank" href="lecid.jpeg">
       <img class="livres" src="lecid.jpeg" alt="LeCid" width="100" height="100" border="5">   
         
                
    </a>
     
          <br> 
          <br> 
          
      
    <div class="desc">  <a href="lecid.html">Le Cid</a>  est un tres bon livre a lire </div>
          <center> 
          5 euros
          </center>
         
             
          <button type="button" onclick="alert('Votre produit est ajoute au panier' ) " > Ajouter au panier  </button>
      </ul>
   
      
      
    
  </div>
</div>
    

<?php require 'footer.php'; ?> 