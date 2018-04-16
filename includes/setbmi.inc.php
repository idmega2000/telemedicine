<?php
	if (isset($_POST['bmi-submit']) && isset($_POST['client-weight']) && isset($_POST['client-height'])){
		if (!empty($_POST['client-weight']) || !empty($_POST['client-height'])){

			$weight= $_POST['client-weight'];
			$height= $_POST['client-height'];
			$height_m= $height/100;
			$bmi= $weight/($height_m * $height_m);
			if($bmi<18.5){
				echo "your BMI is ".$bmi;
				echo "you are underweight";
			}
			elseif($bmi>=18.5<24.9){
				echo "your BMI is ".$bmi." ";
				echo "you are healthy";
			}
			else{
				echo "your BMI is ".$bmi." ";
				echo "you are overweight";
			}

		}

	}

?>