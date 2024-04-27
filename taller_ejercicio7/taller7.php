<?php
$totalPagos = 0;
$totalClientes = 0;

while (true) {
    $consumo = (float)readline("Ingrese el consumo del cliente (0 para salir): ");
    
    if ($consumo == 0) {
        break;
    }
    
    if ($consumo > 50000) {
        $descuento = $consumo * 0.20;
        $pago = $consumo - $descuento;
    } else {
        $pago = $consumo;
    }
    
    $totalPagos += $pago;
    $totalClientes++;
    
    echo "El pago del cliente es: $pago\n";
}

echo "Total de pagos de todos los clientes: $totalPagos\n";
echo "Total de clientes atendidos: $totalClientes\n";
?>
