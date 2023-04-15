<?php
echo "Ingresa una palabra: ";
$palabra = trim(fgets(STDIN)); 
if(esPalindromo($palabra)) {
    echo "$palabra es un palíndromo";
} else {
    echo "$palabra no es un palíndromo";
}

function esPalindromo($palabra) {
    $palabraInvertida = strrev($palabra);
    if(strtolower($palabra) == strtolower($palabraInvertida)) {
        return true;
    } else {
        return false;
    }
}



?>

