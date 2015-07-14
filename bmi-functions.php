<?php
function Calculate_BMI($system, $height, $weight){

	if($system == 'imperial'){
		// convert cm back to inches
		$heightin = $height * 0.393701;
		$heightin2 = $heightin * $heightin;
		$bmi = ($weight / $heightin2) * 703;
		return number_format($bmi, 1);
	}
	
	else {
		return '<strong>Error</strong>';
	}

}
