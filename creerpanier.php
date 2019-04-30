<?php 

/// creer un panier 
function creerpanier(){

    /// existence du panier 
    if(!isset($_SESSION['panier'])){
        
        /// on creer un panier avec comme données la type de produit, la quantité de produit et le prix du prosuit que l'on stock dans une tableau dynamique 
        
        $_SESSION['panier']=array(); 
        $_SESSION['panier']['libelleProduit']= array(); 
        $_SESSION['panier']['quantiteProduit']=array(); 
        $_SESSION['panier']['prixProduit']=array(); 
        
        /// cette ligne permet de verrouiller le panier au moment de la transaction 
        
        $_SESSION['panier']['verrouiller']= false; 
        
    }
return true; 

}
 
 /// fonction permettant de verifier si la panier est verouillé 

    function is Verouille() {
        
         if (isset($_SESSION['panier']) && $_SESSION['panier']['verrouiller'])
   return true;
   else
   return false;
        
    }


/// ajouter un porduit au panier 

function ajouterProduit($libelleProduit, $quantiteProduit, $prixProduit) 
{
    
    /// le panier existe 
    
    if( creerpanier() && !isVerouille())
    {
        
        /// le produit existe deja dans le panier, dans ce cas on ajouter en quantité 
        
        /// on cherche dans le tableau si le produuit existe deja 
        
        $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']); 
        
        /// le produit existe deja , on ajoute en quantité 
        if($positionProduit !== false) {
            
            $_SESSION['panier']['quantitePanier'][$positionProduit] += $quantiteProduit; 
              
        }
        
        /// si le produit n'existe pas dans le apnier, on ajoute les données du produits 
        
        else {
            
        array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
      }
        
        else 
        {
            
            echo " Erreur " ; 
        }
    }  
    
}


/// supprimer un article dans le panier avant la paiement, selon le type de prosuit 

function supprimerProduit( $libelleProduit) { 

    
    //// si le panier existe et que nous sommes pas au paiement 
    if( creerpanier() && !isVerouile()) {
        
        /// on passe par un panier bis , où les elements ne sont pas a supprimer 
        
        /// on remplit le panier bis 
        
        $bis=array(); 
        $bis['libelleProduit']= array(); 
        $bis['quantiteProduit']=array(); 
        $bis['prixProduit']=array(); 
        
        /// cette ligne permet de verrouiller le panier au moment de la transaction 
        
        $bis['verouiller']=$_SESSION['panier']['verouiller']; 
        
        for( $i=0; $i< count($_SESSION['panier']['libelleProduit']); $i++)
        {
            
            array_push( $bis['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
            array_push( $bis['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $bis['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
         


        }
        
    }
    
    /// on remplace notre panier bis par notre panier ( le vrai )
    
    $_SEESION['panier'] = $bis ; 
    
    /// on efface le panier bis 
    unset($bis); 
    

}
else 
{
    
    
    echo " Erreur"; 
}

/// fonciton permettant de mofidier la quantite d'un produit 

function modifierProduit($libelleProduit,$quantiteProduit){
   //Si le panier existe 
   if (creerPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie s
      if ($quantiteProduit > 0)
      {
         //on cherche le produit dans le panier 
         $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else /// on supprime l'article 
      supprimerArticle($libelleProduit);
   }
  else 
      echo "Erreur" ; 
    
    /// afficher le montant global du panier 
    
    
    
    
    function MontantTotal() {
        
        
        /// creer une variable total , initialiser à 0 
        $total = 0 ; 
        
        /// on parcours le panier 
        
        for ($i=0; $i <count($_SESSION['panier']['libelleProduit']); $i++) 
        {
            /// on additionne le montant de chaque produit , on multiplie le prix par la quantite de chaque produit
            
            $total += $_SESSION['panier']['quantiteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i]; 
            
        }
        /// on retourne le montant total 
        return $total ; 
    }
    
    /// fonction permettant de compter le nombre de proudit dans le panier 
    
    function compterProduit() {
        
        if( isset($_SESSION['panier']))
        {   /// retourne le nombre total de produit dans le panier 
            return count($_SESSION['panier']['libelleProduit']); 
        }
        else 
        {
            return 0 ; 
        }
    }
    
    /// fonction permmettant de supprimer le panier 
    
    
    function supprimerPanier(){
        /// unset permet d'effacer le panier de la session actuelle  
        
        unset($_SESSION['panier']); 
    }
    
   
   
?> 


