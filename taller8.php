<?php

$hora = (int)readline("Ingrese la hora (0-23): ");
$minutos = (int)readline("Ingrese los minutos (0-59): ");
$segundos = (int)readline("Ingrese los segundos (0-59): ");


if (($hora >= 0 && $hora <= 23) && ($minutos >= 0 && $minutos <= 59) && ($segundos >= 0 && $segundos <= 59)) {


    $segundos++;



    if ($segundos >= 60) {
        $segundos = 0;
        $minutos++;

        if ($minutos >= 60) {
            $minutos = 0;
            $hora++;

            if ($hora >= 24) {
                $hora = 0;
            }
        }
    }



    echo "La hora en el siguiente segundo es: $hora:$minutos:$segundos\n";
} else {
    echo "Los valores ingresados no son válidos.\n";
}
?>
