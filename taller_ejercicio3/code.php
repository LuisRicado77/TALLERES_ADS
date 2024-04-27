<?php

//ejercicio 3

/*$taller1 = 1.5;
$taller2 = 2.5;
$quiz = 3.0;
$parcial = 3.1;


echo calcularNotaFinal($taller1,$taller2,$quiz,$parcial);*/

if(isset($_POST['submit'])){
	$t1 = $_POST['taller1'];
	$t2 = $_POST['taller2'];
	$q = $_POST['quiz'];
	$p = $_POST['parcial'];

	echo calcularNotaFinal($t1,$t2,$q,$p);
}

function calcularNotaFinal($taller1,$taller2,$quiz,$parcial){
	$promedio = ($taller1+$taller2+$quiz)/3;
	$treintaFinal = $promedio*0.30;
	$setenta = $parcial * 0.70;

	return "la nota final seria: ".$treintaFinal+$setenta;
}