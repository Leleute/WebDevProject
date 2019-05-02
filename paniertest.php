<?php
session_start();
$_SESSION['test'] = "test";
if(isset($_POST["test"])
{
	echo $_POST["test"];
}
?>