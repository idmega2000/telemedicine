<?php
	
	session_start();
	unset($_SESSION['name']);
	unset($_SESSION['id']);
	unset($_SESSION['date']);
	unset($_SESSION['time']);
	header("Location: ../pages/homepage.php");

?>