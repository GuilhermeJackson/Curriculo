<?php 

function ola(){

	echo "Olá mundo! (echo)<br> ";  //não tem return, é uma sub rotina
	return "Olá mundo! (return)<br> ";  //tem return, é uma função
}
ola();

echo ola();

$frase = ola();

echo strlen($frase);
 ?>