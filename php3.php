<?php
//Tipos básicos de variaveis
$nome = "joão";
$site = 'www.hcode.com.br';  //Variaveis de texto usa aspas ""

$ano = 1990;

$salario = 5500.99;  //Variaveis alfanumericos
$bloqueado  = false;  //Varivel do tipo bool, (verdadeiro ou falso)
////////////////////////////// Tipos compostos de variaveis
$frutas = array ("abacaxi", "laranja","manga");

//echo $frutas[2];

$nascimento = new DateTime(); //Instanciando DateTime (Pesquisar mais sobre DateTime)

//var_dump($nascimento);  //Exibe o tipo de dado, tamanho e valor da variavel
///////////////////////////Tipos especiais de variaveis
$arquivo = fopen("php3.php" , "r");

//var_dump($arquivo);

$nulo = Null;
$vazio = "Coco";
echo $vazio;


?>