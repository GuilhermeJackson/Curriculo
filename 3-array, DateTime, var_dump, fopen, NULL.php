<?php
//Tipos básicos de variaveis
$nome = "joão";
$site = 'www.hcode.com.br';  //Variaveis de texto usa aspas ""

$ano = 1990;

$salario = 5500.99;  //Variaveis alfanumericos
$bloqueado  = false;  //Varivel do tipo bool, (verdadeiro ou falso)
////////////////////////////// Tipos compostos de variaveis
$frutas = array ("array abacaxi", "array laranja","array manga");

echo $frutas[1];

echo "<br>","<br>";

$nascimento = new DateTime(); //Instanciando DateTime (Pesquisar mais sobre DateTime)

var_dump($nascimento);  //Exibe o tipo de dado, tamanho e valor da variavel

echo "<br>","<br>";

///////////////////////////Tipos especiais de variaveis
$arquivo = fopen("3-array, DateTime, var_dump, fopen, NULL.php" , "r");

var_dump($arquivo);

echo "<br>","<br>";

$nulo = Null;
$nulo = "Coco";
echo $nulo;

echo "<br>","<br>";

echo isset($nulo);


?>