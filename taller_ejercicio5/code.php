<?php
$arraynumeros = array();


for ($i=0; $i <20 ; $i++) { 
	 $numeros = readline($i+1 ." dato: ");
	array_push($arraynumeros, $numeros);
}

echo "Los datos ingresados son:";
foreach ($arraynumeros as $numero) {

	echo $numero."-";
}

//echo calcular($arraynumeros);

$menores = array();

$menores = calcular($arraynumeros);

echo "Los numeros menores a 25 son: ";
foreach ($menores as $menor) {

	echo $menor."-";
}


function calcular($arraynumeros){
	try{
			$numerosMenores = array();
		$cantidad = count($arraynumeros);
		for ($i=0; $i <$cantidad; $i++) {
			if($arraynumeros[$i] <= 25){
				array_push($numerosMenores,$arraynumeros[$i]); 
			}
		}	
	}catch(Exception $e){
		echo "error".$e->getMessage();
	}
		

	return $numerosMenores;
}

