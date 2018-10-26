<?php 

$pessoa = array();

array_push($pessoa, array(
	'nome'=>'joão',
	'idade'=>20
));

array_push($pessoa, array(
	'nome'=>'Mestre',
	'idade'=>50
));

print_r($pessoa[0]);
echo "<br>";
print_r($pessoa[1]);
echo "<br>";
print_r($pessoa[1]['nome']);
 ?>