<?php
	include 'header.php';
	
?>

<?php
	$bmiii="";
	$bmii="";
	if (isset($_POST['bmi-submit']) && isset($_POST['client-weight']) && isset($_POST['client-height'])){
		if (!empty($_POST['client-weight']) || !empty($_POST['client-height'])){

			$weight= $_POST['client-weight'];
			$height= $_POST['client-height'];
			$height_m= $height/100;
			$bmi= $weight/($height_m * $height_m);
			$bmi= round($bmi,2);
			if($bmi < 18.5){
				$bmiii= "your BMI is ".$bmi." ";
				$bmii= "you are underweight";
			}
			elseif(($bmi> 18.5) && ($bmi < 24.9)){
				$bmiii= "your BMI is ".$bmi." ";
				$bmii= "you are healthy";
			}
			else{
				$bmiii= "your BMI is ".$bmi." ";
				$bmii= "you are overweight";
			}

		}

	}
	else{
		echo "please let me know";
	}

?>

<div class="bmidiv">
<div class="bmiform" id="formDiv" align="center">
		<form id="qiuizInfoForm" method="POST" action="bmi.php" >
			<table class="bookingtable">
				<tr>
					<th>Weight(kg):</th>
					<td><input type="textbox" name="client-weight" id="clientNmae"></td>
				</tr>
				<tr>
					<th>Height(cm):</th>
					<td><input type="textbox" name="client-height" id="clientEmail"></td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input  class="btn btn-primary" type="submit" name="bmi-submit" id="bmibtn" value="calculate">
					</td>
				</tr>
			</table>
			<div id="displaybmi"><?php echo $bmiii; ?></div>
		<div id="displaybmi"><?php echo $bmii; ?></div>
		</form>
		

	</div>
<script>

</script>
	</div>
<?php
	include 'footer.php';
?>