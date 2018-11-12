<?php

$nome = "Dolly Fanta";

function teste() {		//Um escopo
	 global $nome;  //Puxa variavel global "Mário" fora do escopo
	echo $nome;
}								// Termina Um escopo

function teste2 () {
	$nomeUm = (int)$_GET["a"];	//Bagulho da URL
	$nome = "Jorge";  //varivael dentro da função

	var_dump($nomeUm);
	
	echo $nome;
}

teste();
echo "<br>";  //Roda a função
teste2();	//Roda a função

?>