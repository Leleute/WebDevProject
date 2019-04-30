<?php 

 $login1 = isset($_POST["login1"])?$_POST["login1"] : "";
$mdp = isset($_POST["mdp1"])?$_POST["mdp1"] : "";

$database = " projectweb"; 

$db_found = mysqli_connect('localhost:8889','root','root','projectweb')
 or die('Error connecting to MySQL server.');
    
$erreur = ""; 

if( $login == ""){ 
$erreur .=" Le champ Login est vide . <br> ";
}

if( $mdp == ""){ 
$erreur .=" Le champ Mot de Passe est vide . <br> ";
}


/// si la base de donné existe faire 

if($db_found) { 

    $sql = "SELECT * FROM acheteur"; 
    $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result))
 {
     $login= $data['login']; 
     $mdp= $data['mdp'];

}
if ( $login1== $login && $mdp1== $mdp ) {
    
    echo " Conexxion acceptee"
    
}
    else { echo " Erreur de connexion "}

   
    
}
 
    else { echo " Database not found " ; 
         }
 
/// fermer la connexion 

mysqli_close( $db_handle); 
?> 