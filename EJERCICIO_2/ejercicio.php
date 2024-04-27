<?php

if(isset($_POST['submit'])){
	$year = $_POST['year'];

	if($year % 4 == 0){
		if($year % 100 == 0){
			if($year % 400 == 0){
				echo $year. " Es bisiesto";
			}else{
				echo $year. " No es bisiesto";
			}
		}else{
			echo $year. " Es bisiesto";	
		}
	}else{
		echo $year. " No es bisiesto";
	}
}