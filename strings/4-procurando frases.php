<?php

$frase = "A repetiçã é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra/*Pode trocar "$palavra" por caracter "mãe"*/);	//conta quantas casa existem até chegar na palavra "mãe"

$texto = substr($frase, 0, $q);	//retorna os caracteres desde a posição zero (inicio da frase) até antes de "mãe".

var_dump($texto);

$texto2 = substr($frase, $q +  strlen($palavra), strlen($frase));	//texto depois da palavra mãe. Se quiser adicionar a palavra mãe, inserir o sinal de mais " + ", SE NÃO SÓ REMOVER O SINAL

echo "<br>";

var_dump($texto2);


/*
	Seção 3 aula 18.
	Manual = http://php.net/manual/pt_BR/function.strlen.php
*/

?>