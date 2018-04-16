<?php
session_start();
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
    	$phone_number = $_POST['name'];
    	include_once 'dbh.inc.php';
    	$sql= "SELECT client_id, client_name, client_appointment_date, client_appointment_time  FROM client_info WHERE client_phone_number='$phone_number'";
				$result= mysqli_query($conn, $sql);
				$data = mysqli_fetch_assoc($result);
				if($data){
					 $_SESSION['name'] = stripslashes(htmlspecialchars($data['client_name']));
					 $_SESSION['id'] = stripslashes(htmlspecialchars($data['client_id']));
					 $_SESSION['date'] = stripslashes(htmlspecialchars($data['client_appointment_date']));
					 $_SESSION['time'] = stripslashes(htmlspecialchars($data['client_appointment_time']));
					
       				 header('Location: ../pages/chatpage.php');

				}

			else{
					header('Location: ../pages/applogin.php?login=invalid');
				}


       
    }
    else{
         header('Location: ../pages/applogin.php?login=failed');
    }
     
}
?>