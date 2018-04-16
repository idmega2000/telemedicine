<?php
	if (isset($_POST['client-name']) && isset($_POST['client-email']) && isset($_POST['phy-specialist']) && isset($_POST['contact-number']) && isset($_POST['apoint-date']) && isset($_POST['schedule-time']) && isset($_POST['book-apointment'])){
		include_once 'dbh.inc.php';

		$client_name= mysqli_real_escape_string($conn,$_POST['client-name']);
		$client_email= mysqli_real_escape_string($conn,$_POST['client-email']);
		$phy_specialist= mysqli_real_escape_string($conn,$_POST['phy-specialist']);
		$contact_number= mysqli_real_escape_string($conn,$_POST['contact-number']);
		$appoint_date= mysqli_real_escape_string($conn,$_POST['apoint-date']);
		$schedule_time= mysqli_real_escape_string($conn,$_POST['schedule-time']);
		$client_purpose;
		$client_note;
		
		if(isset($_POST['client-purpose'])){
			$client_purpose= $_POST['client-purpose'];
		}
		if(isset($_POST['client-note'])){
			$client_note=$_POST['client-note'];
		}

		$msql="SELECT * FROM client_info WHERE client_phone_number='$contact_number'";
		$result=mysqli_query($conn, $msql); 
		If(mysqli_num_rows($result)){
			$sql="UPDATE client_info SET client_name='$client_name', client_email='$client_email', client_medical_specification='$phy_specialist', client_phone_number='$contact_number', client_purpose='$client_purpose', client_appointment_date='$appoint_date', client_appointment_time='$schedule_time', client_note='$client_note', client_boking_dateandtime=NOW() WHERE client_phone_number='$contact_number'";
				
				mysqli_query($conn, $sql);
				
		}
		else{
			$sql= "INSERT INTO client_info (client_name, client_email, client_medical_specification, client_phone_number, client_purpose, client_appointment_date, client_appointment_time, client_note, client_boking_dateandtime) VALUES ('$client_name', '$client_email', '$phy_specialist', '$contact_number', '$client_purpose', '$appoint_date', '$schedule_time', '$client_note', NOW());";
				
				mysqli_query($conn, $sql);
				
		}


		header("Location: ../pages/success.php");

	}
	else{
		header("Location: ../pages/bookapointment.php?apointment=failed");

	}



?>