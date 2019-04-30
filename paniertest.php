<?php

/// a chaque client une nouvelle session 

session_start(); 

/// initialisation d'un panier dans un tableau 

$SESSION['panier']= array(); 

/// subdiviser notre panier , afin de pouvoir le trier
/// le ID permet d'identifier quel type de produit nous avons 

$SESSION['panier']['ID']=array(); 
$SESSION['panier']['quantite']=array(); 
$SESSION['panier']['taille']=array(); 
$SESSION['panier']['prix']=array(); 


/// verifier l'existence du panier avant d'ajouter un produit

if(!isset($SESSION['panier'])) 
{ 
    /* Initialisation du panier */
    $SESSION['panier'] = array();
    /* Subdivision du panier */ 
    $SESSION['panier']['quantite'] = array(); 
    $SESSION['panier']['taille'] = array(); 
    $SESSION['panier']['prix'] = array(); 
} 

// le panier existe,on ajoute le produit 


?> 