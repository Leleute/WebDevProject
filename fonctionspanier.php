<?php

/**
 * Verifie si le panier existe, le créé sinon
 * @return booleen
 */
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['ID'] = array();
      $_SESSION['panier']['Prix'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}


function ajouterArticle($ID,$Prix){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
     
         array_push( $_SESSION['panier']['ID'],$ID);
         array_push( $_SESSION['panier']['Prix'],$Prix);
    
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}




function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['ID']); $i++)
   {
      $total +=  $_SESSION['panier']['PRIX'][$i];
   }
   return $total;
}



function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['ID']);
   else
   return 0;

}

?>