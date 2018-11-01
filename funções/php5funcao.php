<?php 

$a = 0;

function trocaValor(&$a) {  //"&$a" é passagem de parametro por referencia

	$a -= 50;

	return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

 ?>