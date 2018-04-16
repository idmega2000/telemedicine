<?php

	include_once '../includes/dbh.inc.php';
		echo '<script type="text/javascript">alert("dbcreation started");</script>';

		$sql="CREATE TABLE doctors_info(
		doctor_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    doctor_field varchar(50) NOT NULL,
	    doctor_password varchar(255) NOT NULL,
	    doctor_last_login datetime NOT NULL
	    )";
		
		$result=mysqli_query($conn, $sql);
		if($result===true){
			echo 'Database Created Complete';
		}

		$sql1= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('General Doctor' , MD5('doctor1') , '0000-00-00 00:00:00')";
		mysqli_query($conn, $sql1);

		$sql2= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('Cardiologist' , MD5('doctor2') , '0000-00-00 00:00:00')";
		mysqli_query($conn, $sql2);

		$sql3= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('Cancer Specialist' , MD5('doctor3') , '0000-00-00 00:00:00')";
		mysqli_query($conn, $sql3);

		$sql4= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('Neurologist' , MD5('doctor4') , '0000-00-00 00:00:00')";
		mysqli_query($conn, $sql4);

		$sql5= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('Therapist' , MD5('doctor5') , '0000-00-00 00:00:00')";
		mysqli_query($conn, $sql5);

		$sql6= "INSERT INTO doctors_info (doctor_field , doctor_password , doctor_last_login) VALUES
		('Preventive Healthcare' , MD5('doctor6') , '0000-00-00 00:00:00')";
		$result6=mysqli_query($conn, $sql6);


		if($result6===true){
			echo '<script type="text/javascript">alert("database created successfully");</script>';
			echo 'Database Created Complete';
		}

?>