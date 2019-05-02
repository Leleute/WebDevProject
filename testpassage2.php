<?php
// page2.php

session_start();

echo 'Bienvenue sur la page numéro 2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat


// Vous pourriez utiliser la constante SID ici, tout comme dans la page page1.php
echo '<br /><a href="testpassage1.php">page 1</a>';
?>