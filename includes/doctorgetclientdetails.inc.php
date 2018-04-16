<?php
	if (isset($_POST['doctor_field'])){
		$doctor_field = $_POST['doctor_field'];
		include_once 'dbh.inc.php';
		$sql= "SELECT * FROM client_info WHERE client_medical_specification='$doctor_field'";
				$result= mysqli_query($conn, $sql);
				$index=1;
			
	}
	else{
		header("Location../homepage.php");
	}
?>
<table id="display" style="margin: auto;">
<tr>
   <th>Index</th>
   <th>Names</th>
   <th>Email</th>
   <th>Phone</th>
   <th>App Date</th>
   <th>App Time</th>
   <th>Purpose</th>
   <th>Notes</th>
   <th>Reg Date</th>

 </tr>
	<?php while($rows = mysqli_fetch_array($result)): ?>
		<tr style="margin-top:10px;">
			<td id="index"><?php echo '<a data-id1='.$rows["client_id"].'>'.$index++.'. &nbsp; </a>'; ?><br><br></td>
			<td id="clientname"><?php echo '
				<form  action="docchatpage.php" method="post">
				<input type="hidden" name="client-id" value= '.$rows["client_id"].'>
				<input type="submit" id="clientnameBtnTable" class="buttonToChat" name="client-name" value="'.$rows["client_name"].'">
			</form>
			'; ?><br><br></td>
			<td id="emailTable"><?php echo '<div class="details" id="email">'.$rows["client_email"].'</p>' ?></td>
			<td id="phoneNumberTable"><?php echo '<div class="details">'.$rows["client_phone_number"].'</div>' ?></td>
			<td id="appointmentDateTable"><?php echo '<div class="details" id="appointmentDate">'.$rows["client_appointment_date"].'</div>' ?></td>
			<td id="appointmentTimeTable"><?php echo '<div class="details" id="appointmentTime">'.$rows["client_appointment_time"].'</div>' ?></td>
			<td id="purposeTable"><?php echo '<div class="details" id="purpose">'.$rows["client_purpose"].'</div>' ?></td>
			<td id="noteTable"><?php echo '<div class="details" id="note">'.$rows["client_note"].'</div>' ?></td>
			<td id="bookingDateTimeTable"><?php echo '<div class="details" id="bookingDateTime">'.$rows["client_boking_dateandtime"].'</div>' ?></td>
		</tr>
<?php endwhile; ?>

</table>

