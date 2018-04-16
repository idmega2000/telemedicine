
<?php 
if(isset($_POST['chosen-date']) && isset($_POST['pref-physician'])){
		$chosen_date=$_POST['chosen-date'];
		$chosen_date=$_POST['pref-physician'];
		include_once 'dbh.inc.php';
		//set all time in php array
		$all_time_array= array("09:00:00", "10:00:00", "11:00:00", "12:00:00", "13:00:00", "14:00:00", "15:00:00", "16:00:00");
		$sql = "SELECT client_appointment_time FROM client_info WHERE client_appointment_date= '$chosen_date' AND client_medical_specification='$chosen_date';";
	

		$result= mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result)){
			$key =array_search($row['client_appointment_time'], $all_time_array);
			if($key !=false){
				echo $row['client_appointment_time'];
				unset($all_time_array[$key]);
			}
		}
		foreach($all_time_array as $time_value){
			$trim_time_value = substr(trim($time_value), 0, -3);

			echo "<option value='".$trim_time_value."'>".$trim_time_value."</option>";
		}
		

}


?>