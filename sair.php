<?php
session_start();
echo $_SESSION['email'];
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
	
	header("Location: index.php");
	exit();
	
} else {
	session_destroy();
	header("Location: index.php");
	exit();	
}
?>