<?php

$nome = "Dolly Fanta";

//$nomeUm = $_GET["Dolly Guarana"];  // PQ NÃO FUNCIONA ESSA MERDA?????????????

function teste(){   			//Um escopo
	 global $nome;  //Puxa variavel global "Mário" fora do escopo
	echo $nome;
}								// Termina Um escopo

function teste2 () {

	$nome = "Jorge";  //varivael dentro da função

	echo $nomeUm. " Mestre do NARUTO.";  //variavel dentro da função com cocatenação
}

//teste();  //Roda a função
teste2();	//Roda a função

?>