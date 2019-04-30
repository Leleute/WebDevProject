<?php 

 $login1 = isset($_POST["login1"])?$_POST["login1"] : "";
$mdp = isset($_POST["mdp1"])?$_POST["mdp1"] : "";

$database = " projectweb"; 

$db_found = 
    
$erreur = ""; 

if( $login == ""){ 
$erreur .=" Le champ Login est vide . <br> ";
}

if( $mdp == ""){ 
$erreur .=" Le champ Mot de Passe est vide . <br> ";
}


if ( $erreur == ""){ 

    echo " Connexion reussie " ; 
}
else { 
echo " Erreur de connexion" ; 
}
/// fermer la connexion 


?> 