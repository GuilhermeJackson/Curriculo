<?php

// "include" "inc/php1include.php";	//tenta funciona mesmo que o arquivo não exista ou esteja com algum problema. tambem tem mais recursos como trazer url no include


require "inc/php1include.php";	// "require" exige que o arquivo exista e funcione e seja chamado apenas uma vez. Se não gera erro fatal
echo "<br>";

require_once "inc/php1include.php";	//pode chamar o arquivo duas vezes (ignora a segunda chamada)
echo "<br>";
require_once "inc/php1include.php";
echo "<br>";
$resultado = somar(10, 20);

echo $resultado;

/*
Seção 3 aula 19
inc/arquivo = sobe uma pasta igual o cd Desktoo

 alt + shft + 2 = duplicar tela
*/

?>