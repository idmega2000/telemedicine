
<?php
	include 'header.php';
	
?>

<?php
session_start();
if(isset($_SESSION['doctor-field'])){
		header("Location: doctorspage.php");
		exit();
	}

	$error= '';
		if (isset($_GET['login'])){
			if ($_GET['login']== 'failed'){
				$error = 'pls enter correct login details';

			}
			
		}

?>

	<body>
	<div class="doclogbody">
		<div id="formDiv" class="doclogdiv" align="center" >
			<form id="qiuizInfoForm" action="..\includes\getdoctorsdetails.inc.php" method= "post" >

			<table class="bookingtable">
				<?php
					if($error!=''){									
					echo '<h5 class="text-danger text-center">'.$error.'</h5>';
					}
				?>
				<tr>
					<th>Please Select Prefered Physician :</th>
					<td><select id="d" name="doctor-field" class="form-control" required>
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
					<th>Please Enter Password:</th>
					<td><input type="password" name="doctor-password" class="form-control" id="doctorPassword" required></td>
				</tr>
				<tr>
					<th></th>
					<td><input class="btn btn-primary" type="submit" name="doctor-login" id="doctorLogin" value="Login"></td>
				</tr>
				</table>
			</form>
		</div>
		</div>


<?php
	include 'footer.php';
?>