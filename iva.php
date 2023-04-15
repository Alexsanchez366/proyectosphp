<?php


$precio = 200; 
$iva = 0.13; 

function calcularPrecioConIva($precio, $iva = 0.21) {
    if ($iva <= 0) {
        $iva = 0.21; 
    }
    $precioConIva = $precio * (1 + $iva);
    return $precioConIva;
}


$precioConIva = calcularPrecioConIva($precio, $iva);
echo "El precio con IVA es: " . $precioConIva;
?>
