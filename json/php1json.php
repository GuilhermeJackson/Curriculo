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

echo json_encode($pessoa);

 ?>