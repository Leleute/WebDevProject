 <?php

/// affichage du panier 


 //session_start(); 
/// appel de la fonction qui creer un panier 
include_once("creerpanier.php"); 


/// fonction de traitement 
/// creation d'une variable booleenne 


/// SOURCE https://jcrozier.developpez.com/articles/web/panier/

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

    
    <head> 
    
    <title> Panier </title>
    
    </head>
    
    
    <body> 
    
        <!-- esthetique du panier --> 
        
    <form method="post" action="panier.php">
        <!-- formualire --> 
        
       <table styme="width: 400px">
        
        <tr> 
           <td colspan="4"> Votre Panier </td>
        </tr>
           
           <tr> 
           <td> Produit</td>
           <td>  Quantité </td>
            <td> Prix Unitaire </td> 
            <td> Action</td>
           </tr>
        
        
           <?php 
           
           if (creationOanier())
           {
               
               $nbarticle=count($_SESSION['panier']['libelleproduit']) ;
               
               if( $nbarticle <=0){
                   echo " Votre panier est vide " ; 
                   
               }
               
               else 
               {
                   
                   for( $i=0; $i<$nbarticle; $i++)
                   echo "<tr>";
				echo "<td>".htmlspecialchars($_SESSION['panier']['libelleproduit'][$i])."</ td>";
				echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
				echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
				echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
				echo "</tr>";
                       
                       
                       
                       
                   }
               
               echo "<tr><td colspan=\"2\"> </td>";
			echo "<td colspan=\"2\">";
			echo "Total : ".MontantTotal();
			echo "</td></tr>";

			echo "<tr><td colspan=\"4\">";
			echo "<input type=\"submit\" value=\"Rafraichir\"/>";
			echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

			echo "</td></tr>";
                   
               }
               
               
           }
           ?> 
           
        </table> 
        
        
        </form>
    
    
    
    </body>
    
    
</html>
   



?> 
