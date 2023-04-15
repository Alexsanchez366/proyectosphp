<?php
// bucles
// for  foreach  while  do-while

//bucle for :
    //se utilixa para repetir una seccion de codigo

   // for( $i =1; $i<= 10; $i++){
    //echo $i. "\n";
    //}



$numeros_impares = array();
$contador = 1;

while (count($numeros_impares) < 15) {
    if ($contador % 2 != 0) {
        array_push($numeros_impares, $contador);
    }
    $contador++;
}

$suma = 0;
foreach ($numeros_impares as $numero) {
    echo $numero . " ";
    $suma += $numero;
}
echo "\n";
echo "La suma de los 15 números impares es: " . $suma;

?>