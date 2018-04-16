<?php
	
	session_start();
	unset($_SESSION['doctor-field']);
	unset($_SESSION['doctor-id']);
	header("Location: ../pages/homepage.php");

?>