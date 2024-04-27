<?php

if(isset($_POST['submit'])){
	$ti = $_POST['interesAnual'];
	$capital = $_POST['capital'];

	echo "El capital se doblaran en ".calcularTiempoDuplicacion($capital,$ti); 

}



function calcularTiempoDuplicacion($capital, $tasaInteres) {
    $años = 0;
    while ($capital < $capital * 2) {
        $capital *= (1 + $tasaInteres);
        $años++;
    }
    return $años. " años";
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
	<a href="taller4.html">regresar</a>

</body>
</html>