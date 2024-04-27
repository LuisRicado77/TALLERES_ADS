<?php

if(isset($_POST['submit'])){
	$fecha = $_POST['fecha'];
	$name = $_POST['name'];

	//echo $fecha
}

$year = tomarAño($fecha);
$age = calcularEdad($year);
 function tomarAño($fecha){
	$partes = explode("-", $fecha);
	$year = $partes[0];
	return $year;
}
function calcularEdad($year){
	$currentYear = 2024;
	$yearInt = intval($year);
	$age = $currentYear - $yearInt;
	return "This is your age ".$age;	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SOLUCIÓN</title>
</head>
<body>
	<center>
		<h3><?php echo "Hello ".$name ?></h3>
		<h3><?php echo "Your birhday is on ".$fecha ?></h3>
		<h3><?php echo $age; ?></h3>
	</center>

</body>
</html>