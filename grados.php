<?php
function conversion(){
  $celsius=readline('ingrese los grados celsius: ');
  $farenheit=$celsius*1.8+32;
  return $farenheit.' grados Farenheit';
}echo conversion()

?>