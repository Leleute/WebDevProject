<?php
session_start();
include_once("fonctionspanier.php");

$erreur = false;

if(isset($_POST['BoutonAjoutPanier'])){
    $ID=$_POST['ID'];
    $Prix=$_POST['Prix'];
    echo 'Salut '. $ID.'de '. $Prix.'<br/>Bienvenue sur mon site !';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>Votre panier</title>
</head>
<body>

<form method="post" action="panier1.php">
<table style="width: 400px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr>
		<td>ID</td>
		<!--<td>Quantité</td>-->
		<td>Prix</td>
		<td>Action</td>
	</tr>


	<?php
	if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['ID']);
	   if ($nbArticles <= 0)
	   echo "<tr><td>Votre panier est vide </ td></tr>";
	   else
	   {
	      for ($i=0 ;$i < $nbArticles ; $i++)
	      {
	         echo "<tr>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['ID'][$i])."</ td>";
	         //echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['Prix'][$i])."</td>";
	         //echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['ID'][$i]))."\">XX</a></td>";
	         echo "</tr>";
	      }

	      echo "<tr><td colspan=\"2\"> </td>";
	      echo "<td colspan=\"2\">";
	      echo "Total : ".MontantGlobal();
	      echo "</td></tr>";

	      echo "<tr><td colspan=\"4\">";
	      //echo "<input type=\"submit\" value=\"Rafraichir\"/>";
	     // echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

	      echo "</td></tr>";
	   }
	}
	?>
</table>
</form>
</body>
</html>