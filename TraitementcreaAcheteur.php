<?php
$nom = isset($_POST["nom"])? $_POST["nom"] : "";

$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$login = isset($_POST["login"])? $_POST["login"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$adr1 = isset($_POST["adr1"])? $_POST["adr1"] : "";
$adr2 = isset($_POST["adr2"])? $_POST["adr2"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$codePostal = isset($_POST["codePostal"])? $_POST["codePostal"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$typeC = isset($_POST["typeC"])? $_POST["typeC"] : "";

 // echo "$typeC"; 
$numC = isset($_POST["numC"])? $_POST["numC"] : "";
$nomC = isset($_POST["nomC"])? $_POST["nomC"] : "";
$dateC = isset($_POST["dateC"])? $_POST["dateC"] : "";
$codeC = isset($_POST["codeC"])? $_POST["codeC"] : "";


$database = "projectweb"; 


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($_POST["button2"]) {
if ($db_found) {
$sql = "SELECT * FROM acheteur";
if ($email != "") {
//on cherche l'acheteur avec les paramètres titre et auteur
$sql .= " WHERE Email LIKE '%$email%'";
if ($login != "") {
$sql .= " OR Login LIKE '%$login%'";
}
}
$result1 = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result1) != 0) {
//le livre est déjà dans la BDD
echo "Un utilisateur utilise deja cette adresse Email ou se pseudo, veuillez en changer";
} 
$result2 = 0;
    
    
if($nom == "" || $prenom == "" || $login == "" || $mdp == "" || $adr1 == "" || $ville == "" || $codePostal == "" || $pays == "" || $tel == "" || $typeC == "" || $numC == "" || $nomC == "" || $dateC == "" || $codeC == "" ) {
	$result2 = 1;
	echo "Un des champs est vide ";
}

    

if(mysqli_num_rows($result1) == 0 && $result2 == 0) {
$sql = "INSERT INTO acheteur(ID, Nom, Prenom, Email, Login, MdP, Adresse1, Adresse2, Ville, CodePostal, Pays, Tel, TypeCarte, NumCarte, NomCarte, DateExpi, CodeSecu)
VALUES (NULL, '$nom', '$prenom', '$email', '$login', '$mdp', '$adr1', '$adr2', '$ville', '$codePostal', '$pays', '$tel', '$typeC', '$numC', '$nomC', '$dateC', '$codeC')";
$result = mysqli_query($db_handle, $sql);
echo "Ajout reussit !" . "<br>";
 //on affiche l'acheteur ajouté
$sql = "SELECT * FROM acheteur";
if ($login != "") {
//on cherche l'cheteur avec les paramètres titre et auteur
$sql .= " WHERE Login LIKE '%$login%'";
if ($email != "") {
$sql .= " AND Email LIKE '%$email%'";
}
}
$result = mysqli_query($db_handle, $sql);
while ($data = mysqli_fetch_assoc($result)) {
echo "Informations sur le livre ajouté:" . "<br>";
echo "ID: " . $data['ID'] . "<br>";
echo "Login: " . $data['Login'] . "<br>";
echo "<br>";
}
}
} else {
echo "Database not found";
}
}
//fermer la connexion
mysqli_close($db_handle);
?>