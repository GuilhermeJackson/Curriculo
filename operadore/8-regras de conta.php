<?php

$resultado = 10 + 3 / 2;  //Primeiro divide 3 por 2 e somou o 10 = 11,5
$resultado2 = (10 + 3) / 2;

$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 <20; 
/*Compara se (10 + 3) / 2 = 6,5 é menor que 5.
  Compara se 10 + 5 = 15 é maior que 20
  && Compara se as DUAS(2) afirnamções são verdadeiras e então devolve true
  TEM QUE DEVOLVER COM var_dump($VARIAVEL); PARA RETORNAR UM BOOL
*/
$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 <20; 
//Devolve true quando pelo menos uma das condições são verdadeiras

echo "10 + 3 / 2 = " , $resultado , "<br>";

echo "(10 + 3) / 2 = " , $resultado2 , "<br>";

echo "(10 + 3) / 2 > 5 && 10 + 5 <20: " , var_dump($resultado3) , "<br>"; // NÃO ESQUECER DE USAR O var_dump($variavel);

echo "(10 + 3) / 2 > 5 || 10 + 5 <20; " , var_dump($resultado4);
?>