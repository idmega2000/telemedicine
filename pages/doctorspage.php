x<?php
	include 'header.php';
	
?>

<?php

session_start();
	if(!isset($_SESSION['doctor-field'])){
		header("Location: homepage.php");
		exit;
	}

	$doctor_field= $_SESSION['doctor-field'];
?>
<script>
$.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
$(function() {
      var elem = document.createElement('input');
      elem.setAttribute('type', 'date');
 
      if ( elem.type === 'text' ) {
         $('#selectDate').datepicker({
    minDate: +1,
showButtonPanel: true,
showOn: "button",
        buttonImage: "../images/calendar.gif",

       }); 
      }
   });

</script>
	<body>
	<div class="docspagebody">
	<div class="clientsearch">
	Appointment Date : <input type="date" name="apoint-date" id="selectDate" onchange="fetchSelectedDate(this.value)"> &nbsp; &nbsp; &nbsp;
	<a  class="btn btn-primary" href="doctorspage.php">All <?php echo $doctor_field ;?> Appointments</a>&nbsp; &nbsp; &nbsp;

	<a  class="btn btn-primary" href="passwordpage.php">Change Password</a>&nbsp; &nbsp; &nbsp;


	<a  class="btn btn-primary" href="../includes/doclogout.inc.php">Log out</a>
	</div>
	
		<div class="cdetails" id="displayData" align="center" >
			
		</div>
	</div>
<script type="text/javascript">
	var doctor_field ='<?php echo $doctor_field; ?>';
	dispalyClientData();

	 function dispalyClientData(){
	 	var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("POST","../includes/doctorgetclientdetails.inc.php", true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

		
				document.getElementById("displayData").innerHTML=xmlhttp.responseText;
			}

	  	}
	  	xmlhttp.send("doctor_field="+doctor_field);
	}	

	function fetchSelectedDate(chosen_date){
	 	var chosen_date;
	 	var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("POST","../includes/getdatedata.inc.php", true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

		
				document.getElementById("displayData").innerHTML=xmlhttp.responseText;
			}

	  	}
	  	xmlhttp.send("chosen_date="+chosen_date);
	}	

</script>
<?php
	include 'footer.php';
?>