<?php 

$pessoa = array(
	'nome'=>'João',
	'idade'=>20
);

foreach ($pessoa as &$value) {	//se o "&" não tiver, o value só altera dentro do foreach

	if (gettype($value) === 'integer') $value += 10; //retorna o tipo de dado da variavel

	echo $value.'<br>';
}

print_r($pessoa);

 ?>