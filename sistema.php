<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
	
	header("Location: index.php");
	exit();
}
echo '<a href="sair.php">sair</a><br>';
echo "sistema";
?>