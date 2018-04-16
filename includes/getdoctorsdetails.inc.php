<?php

if (isset($_POST['doctor-field']) && isset($_POST['doctor-password']) && isset($_POST['doctor-login'])){
	session_start();

	include_once 'dbh.inc.php';

	$doctor_field = mysqli_real_escape_string($conn , $_POST['doctor-field']);
	$doctor_password =  mysqli_real_escape_string($conn , $_POST['doctor-password']);
	if($doctor_field=="" || $doctor_password==""){
		
		header("Location: ../pages/doctorsloginpage.php?login=empty");
	}

	$sql = "SELECT * FROM doctors_info WHERE doctor_field = '".$doctor_field."' AND doctor_password = '".md5($doctor_password)."';";

	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)){
		$res= mysqli_fetch_assoc($result);
	
		$_SESSION['doctor-field']=$res['doctor_field'];
		$_SESSION['doctor-id']=$res['doctor_id'];


		header("Location: ../pages/doctorspage.php");
	}



	else{
		header("Location: ../pages/doctorsloginpage.php?login=failed");
		
	}


	
}
else {
	
	header("Location: ../pages/doctorsloginpage.php?login=empty");

}


?>