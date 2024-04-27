<?php

if(isset($_POST['submit'])){
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];

	$total = $p1+$p2+$p3+$p4+$p5;


	 $pesos = conversion($total);

	 echo "el precio total en pesos colombianos es: ".$pesos;
}





function conversion($totaldolares){
	$pesosColombianos = $totaldolares*4000;

	return $pesosColombianos;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<br><br>
	<a href="taller6.html">regresar</a>

</body>