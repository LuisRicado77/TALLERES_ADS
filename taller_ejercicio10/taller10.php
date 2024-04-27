<?php


while (true) {
	$dato = (int)readline("ingrese un numero(0 para salir): ");

	if($dato == 0){
		echo "fin";
		break;
	}
	for ($i=1; $i <= 10; $i++) { 
		$r = $dato*$i; 
		echo $dato." x ".$i." = ".$r."\n";
	}
}

