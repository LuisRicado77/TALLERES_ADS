<?php
/*2. Realizar la conversión de una temperatura dada en grados Centígrados a grados Fahrenheit (Fórmula: F = (9/5) C + 32).*/

if(isset($_POST['submit'])){
	$grados =$_POST['grados'];

	echo conversion($grados);
}


 function conversion($grados)
{
	$result = ((9/5)*$grados+32);

	return "Los grados centigrados: ".$grados." En Fahrenheit serian:".$result;
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
	<a href="taller2.html">regresar</a>

</body>
</html>