<?php


$distancia_total_en_kilometros = 42.195;
$horas = 2; 
$minutos = 25; 


$tiempTotalMin = $horas * 60 + $minutos;


$tiempo_medio_por_kilometro = $tiempo_total_en_minutos / $distancia_total_en_kilometros;


echo "El tiempo medio por kilómetro es: " . round($tiempo_medio_por_kilometro, 2) . " minutos por kilómetro";
?>
