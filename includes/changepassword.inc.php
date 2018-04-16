<?php
session_start();
include "dbh.inc.php";

	if(isset($_POST['change-pass']) && isset($_SESSION['doctor-id'])){

		

	$oldpassword = mysqli_real_escape_string($conn, $_POST['old-pass']);
	$newpassword = mysqli_real_escape_string($conn, $_POST['second-np']);
	$sql = "SELECT * FROM doctors_info WHERE doctor_id = '".$_SESSION['doctor-id']."' and doctor_password = '".md5($oldpassword )."';";

	$result=mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 1){
			$sql2 = "UPDATE doctors_info SET  doctor_password = '".md5($newpassword)."' WHERE doctor_id = '".$_SESSION['doctor-id']."';";

			$result2 = mysqli_query($conn, $sql2);
			if ($result2){

				echo '<script type="text/javascript">alert("password changed successfully"); </script>';
				header("Location: ../pages/doctorspage.php");
			}
			else{
				echo 'data not changed';
			}
		}
		else{

				echo '<script type="text/javascript">alert("wrong old password"); </script>';
				header("Location: ../pages/passwordpage.php?change=failed");
		}

	}



?>