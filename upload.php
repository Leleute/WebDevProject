

<?php
$login = isset($_POST["login"])? $_POST["login"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$database = "projectweb";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($_POST["button2"]) 
{
	if ($db_found) 
	{
		$sql = "SELECT * FROM vendeur";
		if ($email != "") {
			$sql .= " WHERE Email LIKE '%$email%'";
			if ($login != "") {
				$sql .= " OR Pseudo LIKE '%$login%'";
			}
		}
		$result1 = mysqli_query($db_handle, $sql);
		if (mysqli_num_rows($result1) != 0) 
		{
			echo "Un utilisateur utilise deja cette adresse Email ou ce login, veuillez changer svp";
			echo "<br />";
		} 
		$result2 = 0;
		if($login == "" || $email == "" || $nom == "" || $mdp == "")
		{
			$result2 = 1;
			echo "Il y a au moins un des composants obligatoires de vide";
			echo "<br />";
		}
		//Upload de l'image 
		if(mysqli_num_rows($result1) == 0 && $result2 == 0)
		{
			//"images" = subdirectory for images in www directory
			$target_dir = "bdd/";
			$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
			$uploadOk = 1;
			//file extension in lower case	
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Vérifier si le fichier image est une image réelle ou une image fausse
			if(isset($_POST["button2"])) 
			{
				$check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
				if($check !== false) 
				{
					echo "Le fichier est une image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} 
				else 
				{
					echo "Le fichier n'est pas une image.";
					$uploadOk = 0;
				}
			}
			// Vérifier la taille du fichier
			if ($_FILES["fileToUpload1"]["size"] > 500000)
			{
				echo "<br>" . "Désolé, votre fichier est trop volumineux.";
				$uploadOk = 0;
			}
				// Autoriser certains formats de fichier
			if (($imageFileType == "jpg") || ($imageFileType == "png") || ($imageFileType == "jpeg")
			|| ($imageFileType == "gif")) 
			{
				echo "<br>" . "Fichier autorisé. Format = JPG | JPEG| PNG | GIF.";
				$uploadOk = 1;
			} 
			else 
			{
				echo "<br>" . "Désolé. Seuls fichiers en format JPG, JPEG, PNG, GIF sont autorisés.";
				$uploadOk = 0;
			}
			// Vérifiez si $uploadOk est défini comme 0 par une erreur
			if ($uploadOk == 0) {
				echo "<br>" . "Désolé, votre fichier n'a pas été téléchargé.";
				// si tout est correct, télécharger le fichier
			} 
			else 
			{
				if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) 
				{
					echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload1"]["name"]). " a été
					téléchargé.";
				} 
				else 
				{
					echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
					fichier.";
				}
			}
			$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
			$uploadOk = 1;
			//file extension in lower case
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Vérifier si le fichier image est une image réelle ou une image fausse
			if(isset($_POST["button2"])) 
			{
				$check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
				if($check !== false)
				{
					echo "Le fichier est une image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} 
				else {
					echo "Le fichier n'est pas une image.";
					$uploadOk = 0;
				}
			}
			// Vérifier la taille du fichier
			if ($_FILES["fileToUpload2"]["size"] > 500000) 
			{
			echo "<br>" . "Désolé, votre fichier est trop volumineux.";
			$uploadOk2 = 0;
			}
			// Autoriser certains formats de fichier
			if (($imageFileType == "jpg") || ($imageFileType == "png") || ($imageFileType == "jpeg")
			|| ($imageFileType == "gif")) 
			{
				echo "<br>" . "Fichier autorisé. Format = JPG | JPEG| PNG | GIF.";
				$uploadOk2 = 1;
			}	 
			else 
			{
				echo "<br>" . "Désolé. Seuls fichiers en format JPG, JPEG, PNG, GIF sont autorisés.";
				$uploadOk2 = 0;
			}
			// Vérifiez si $uploadOk est défini comme 0 par une erreur
			if ($uploadOk2 == 0) {
				echo "<br>" . "Désolé, votre fichier n'a pas été téléchargé.";
				// si tout est correct, télécharger le fichier
			} 
			else 
			{
				if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) 
				{
					echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload2"]["name"]). " a été
					téléchargé.";
				}	 
				else 
				{	
					echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
					fichier.";
				}
			}
			if(mysqli_num_rows($result1) == 0 && $result2 == 0 && $uploadOk == 1 && $uploadOk2 == 1)
			{
				$pdp = basename( $_FILES["fileToUpload1"]["name"]);
				$pdc = basename( $_FILES["fileToUpload2"]["name"]);
				$sql = "INSERT INTO vendeur(ID, Pseudo, Email, PdP, PdC, Nom, mdp)
				VALUES (NULL, '$login', '$email', '$pdp', '$pdc', '$nom', '$mdp')";
				$result = mysqli_query($db_handle, $sql);
			/// Affichage de la reussite !!


			 echo '<p><a href="http://www.google.fr">lien</a></p>';;
				
			}
		}
	}
	
}

?>