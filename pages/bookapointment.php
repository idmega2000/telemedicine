<?php
	include 'header.php';
	
?>
<body>
<?php
    if(isset($_GET['apointment'])){
     
        if($_GET['apointment']== "failed"){
            echo "please fill all details correctly";
        }
        else{
            echo "";
        }
    }  
?>
<script>
$.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
$(function() {
      var elem = document.createElement('input');
      elem.setAttribute('type', 'date');
 
      if ( elem.type === 'text' ) {
         $('#apointmentDate').datepicker({
    minDate: +1,
showButtonPanel: true,
showOn: "button",
        buttonImage: "../images/calendar.gif",

       }); 
      }
   });

</script>


	<div class="thebody">
		<div id="formDiv" align="center">
			<form id="qiuizInfoForm" method="POST" action="../includes/setclientinfo.inc.php" >
			<table class="bookingtable">
			<tr>
				<th>Name:</th>
				<td><input type="textbox" class="form-control" name="client-name" id="clientNmae" required></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><input type="email" class="form-control" name="client-email" id="clientEmail" required></td>
			</tr>
			<tr>
				<th>Contact Number : </th>
				<td><input id="contactNumber" class="form-control" type="textbox" name="contact-number" maxlength="12" required></td>
			</tr>
			<tr>
				<th>Prefered Physician :</th>
				<td><select id="phySpeciality" class="form-control" name="phy-specialist" required>
					<option  Value=""></option>
					<option  Value="General Doctor">General Doctor</option>
					<option  Value="Cardiologist">Cardiologist</option>
					<option  Value="Cancer Specialist">Cancer Specialist</option>
					<option  Value="Neurologist">Neurologist</option>
					<option  Value="Therapist">Therapist</option>
					<option  Value="Preventive Healthcare">Preventive Healthcare</option>
					
				</select></td>
			</tr>
			<tr>
				<th>Purpose:</th>
				<td><input type="textbox" class="form-control" name="client-purpose" id="clientPurpose"></td>
			</tr>
			<tr>
				<th>Appointment Date :</th>
				<td><input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" name="apoint-date" id="apointmentDate" onchange="fetchTimes(this.value)" required></td>
			</tr>
			<tr>
				<th>Schedule Time:</th>
				<td><select id="scheduleTime" class="form-control" name="schedule-time" required>
					<option  Value=""></option>	
				</select></br></br></td>
			</tr>
			<tr>
				<th>Notes :</th>
				<td></span><textarea rows="8" cols="30" class="form-control" id="clientNote" type="textbox" name="client-note"></textarea></br></br></td>
			</tr>
			<tr>
				<th></th>
				<td>
					<input  class="btn btn-primary" type="submit" name="book-apointment" id="bookApointment" value="Book Apointment">
				</td>
			</tr>
			</table>
				
				
			</form>
		</div>
		</div>
		<div>
			<h2><em>
				Book your appointment with us and have a live session chat with our doctor. 
			</em><h2>
			
		</div>

		<script>
			var today = new Date();
			var dd= today.getDate() + 1;
			var mm= today.getMonth() + 1;
			var yyyy = today.getFullYear();
			if(dd<10){
				dd='0' + dd ;
			}
			if(mm<10){
				mm='0' +mm ;
			}
			today = yyyy+'-'+mm+'-'+dd;
			document.getElementById("apointmentDate").setAttribute("min", today);

		</script>
		</div>
		<div id="checkit"></div>
</body>
<?php
	include 'footer.php';
?>