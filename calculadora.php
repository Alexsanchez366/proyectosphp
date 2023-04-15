<?php

function sumar($num1, $num2){
  return $num1 + $num2;
}


function restar($num1, $num2){
  return $num1 - $num2;
}

function multiplicar($num1, $num2){
  return $num1 * $num2;
}

function dividir($num1, $num2){
  return $num1 / $num2;
}

function imprimir_menu(){
  echo "CALCULADORA\n";
  echo "1. Suma\n";
  echo "2. Resta\n";
  echo "3. Multiplicación\n";
  echo "4. División\n";
  echo "5. Salir\n";
  echo "Elija una opción: ";
}

function leer_opcion(){
  $opcion = readline();
  return $opcion;
}

function leer_numeros(){
  echo "Ingrese el primer número: ";
  $num1 = readline();
  echo "Ingrese el segundo número: ";
  $num2 = readline();
  return array($num1, $num2);
}

while(true){
  imprimir_menu();
  $opcion = leer_opcion();

  switch($opcion){
    case 1:
      $numeros = leer_numeros();
      $resultado = sumar($numeros[0], $numeros[1]);
      echo "El resultado es: " . $resultado . "\n";
      break;
    case 2:
      $numeros = leer_numeros();
      $resultado = restar($numeros[0], $numeros[1]);
      echo "El resultado es: " . $resultado . "\n";
      break;
    case 3:
      $numeros = leer_numeros();
      $resultado = multiplicar($numeros[0], $numeros[1]);
      echo "El resultado es: " . $resultado . "\n";
      break;
    case 4:
      $numeros = leer_numeros();
      if($numeros[1] == 0){
        echo "Error: división por cero\n";
      }else{
        $resultado = dividir($numeros[0], $numeros[1]);
        echo "El resultado es: " . $resultado . "\n";
      }
      break;
    case 5:
      exit();
    default:
      echo "Opción inválida\n";
      break;
  }
}

?>