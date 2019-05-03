<?php
		session_start();
		$IDvend = $_SESSION["utilisateur"];
		$quant = isset($_POST["quantite"])? $_POST["quantite"] : "";
		$nom = isset($_POST["nom"])? $_POST["nom"] : "";
		$nom = isset($_POST["nom"])? $_POST["nom"] : "";
		$prix = isset($_POST["prix"])? $_POST["prix"] : "";
		$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
		$edit = isset($_POST["edit"])? $_POST["edit"] : "";
		$video = isset($_POST["video"])? $_POST["video"] : "";
		$date = isset($_POST["date"])? $_POST["date"] : "";
		$desc = isset($_POST["desc"])? $_POST["desc"] : "";
		$couleur = isset($_POST["couleur"])? $_POST["couleur"] : "";
		$database = "projectweb";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		if ($db_found) 
		{
		if($_POST["button"] == "Creez votre Livre")
			{
			$result = 0;
			if($nom == "" || $prix == "" || $auteur == "" || $edit == "" || $date == "" || $desc == "" || $quant < 1)
			{
				$result = 1;
				echo "Il y a au moins un des composants obligatoires de vide";
				echo "<br />";
			}
			//Upload de l'image 
			if($result == 0)
			{
			echo $_FILES["fileToUpload"]["name"];
				//"images" = subdirectory for images in www directory
				$target_dir = "imageslivres/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				//file extension in lower case	
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Vérifier si le fichier image est une image réelle ou une image fausse
				if(isset($_POST["button"])) 
				{
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
				if ($_FILES["fileToUpload"]["size"] > 500000)
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
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été
						téléchargé.";
					} 
					else 
					{
						echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
						fichier.";
					}
				}
				
				if($result == 0 && $uploadOk == 1)
				{
					$adrphoto = basename( $_FILES["fileToUpload"]["name"]);
						for ($i = 1; $i <= $quant; $i++) 
						{

					$sql = "INSERT INTO livres(ID, Nom, Prix, AdressePhoto, AdresseVideo, Description, Auteur, Editeur, Date, IDvendeur)
					VALUES (NULL, '$nom', '$prix', '$adrphoto', '$video', '$desc', '$auteur', '$edit', '$date', '$IDvend')";
				$result = mysqli_query($db_handle, $sql);
			}
				/// Affichage de la reussite !!
				 echo '<p><a href="AjoutItem.php">ok</a></p>';
					
				}
			}
		}
		if($_POST["button"] == "Creez votre Musique")
		{
			$result = 0;
			if($nom == "" || $prix == "" || $auteur == "" || $edit == "" || $date == "" || $desc == "" || $quant < 1)
			{
				$result = 1;
				echo "Il y a au moins un des composants obligatoires de vide";
				echo "<br />";
			}
			//Upload de l'image 
			if($result == 0)
			{
			echo $_FILES["fileToUpload"]["name"];
				//"images" = subdirectory for images in www directory
				$target_dir = "imagesmusiques/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				//file extension in lower case	
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Vérifier si le fichier image est une image réelle ou une image fausse
				if(isset($_POST["button"])) 
				{
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
				if ($_FILES["fileToUpload"]["size"] > 500000)
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
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été
						téléchargé.";
					} 
					else 
					{
						echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
						fichier.";
					}
				}
				
				if($result == 0 && $uploadOk == 1)
				{
					$adrphoto = basename( $_FILES["fileToUpload"]["name"]);
					for ($i = 1; $i <= $quant; $i++) 
						{
					$sql = "INSERT INTO musiques(ID, Nom, Prix, AdressePhoto, AdresseVideo, Description, Artiste, Label, Date, IDvendeur)
					VALUES (NULL, '$nom', '$prix', '$adrphoto', '$video', '$desc', '$auteur', '$edit', '$date', '$IDvend')";
					$result = mysqli_query($db_handle, $sql);
				}
				/// Affichage de la reussite !!
				 echo '<p><a href="AjoutItem.php">lien</a></p>';
					
				}
			}
		}
		if($_POST["button"] == "Creez votre Vetement")
		{
			$result = 0;
			if($nom == "" || $prix == "" || $auteur == "" || $edit == "" || $desc == "" || $couleur == "" || $quant < 1)
			{
				$result = 1;
				echo "Il y a au moins un des composants obligatoires de vide";
				echo "<br />";
			}
			//Upload de l'image 
			if($result == 0)
			{
			echo $_FILES["fileToUpload"]["name"];
				//"images" = subdirectory for images in www directory
				$target_dir = "imagesvetements/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				//file extension in lower case	
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Vérifier si le fichier image est une image réelle ou une image fausse
				if(isset($_POST["button"])) 
				{
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
				if ($_FILES["fileToUpload"]["size"] > 500000)
				{
					echo "<br>" . "Désolé, votre fichier est trop volumineux.";
					$uploadOk = 0;
				}
					// Autoriser certains formats de fichier
				if (($imageFileType == "jpg") || ($imageFileType == "png") || ($imageFileType == "jpeg" || $quant < 1)
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
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été
						téléchargé.";
					} 
					else 
					{
						echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
						fichier.";
					}
				}
				
				if($result == 0 && $uploadOk == 1)
				{
					$adrphoto = basename( $_FILES["fileToUpload"]["name"]);
					for ($i = 1; $i <= $quant; $i++) 
						{
					$sql = "INSERT INTO vetement(ID, Nom, Prix, AdressePhoto, AdresseVideo, Description, Taille, Sexe, Couleur, IDvendeur)
					VALUES (NULL, '$nom', '$prix', '$adrphoto', '$video', '$desc', '$auteur', '$edit', '$couleur', '$IDvend')";
					$result = mysqli_query($db_handle, $sql);
				}
				/// Affichage de la reussite !!
				 echo '<p><a href="AjoutItem.php">ok</a></p>';
					
				}
			}
		}
		if($_POST["button"] == "Creez votre Item")
		{
			$result = 0;
			if($nom == "" || $prix == "" || $desc == "" || $quant < 1)
			{
				$result = 1;
				echo "Il y a au moins un des composants obligatoires de vide";
				echo "<br />";
			}
			//Upload de l'image 
			if($result == 0)
			{
			echo $_FILES["fileToUpload"]["name"];
				//"images" = subdirectory for images in www directory
				$target_dir = "imagessport/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				//file extension in lower case	
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Vérifier si le fichier image est une image réelle ou une image fausse
				if(isset($_POST["button"])) 
				{
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
				if ($_FILES["fileToUpload"]["size"] > 500000)
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
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{
						echo "<br>" . "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été
						téléchargé.";
					} 
					else 
					{
						echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
						fichier.";
					}
				}
				
				if($result == 0 && $uploadOk == 1)
				{
					$adrphoto = basename( $_FILES["fileToUpload"]["name"]);
					for ($i = 1; $i <= $quant; $i++) 
						{
					$sql = "INSERT INTO sportetloisir(ID, Nom, Prix, AdressePhoto, AdresseVideo, Description, IDvendeur)
					VALUES (NULL, '$nom', '$prix', '$adrphoto', '$video', '$desc', '$IDvend')";
					$result = mysqli_query($db_handle, $sql);
				}
				/// Affichage de la reussite !!
				 echo '<p><a href="AjoutItem.php">ok</a></p>';
					
				}
			}
		}
	}

?>