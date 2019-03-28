<?php 

$qualASuaIdade = -2;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

	echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {
	echo "Adulto";
}


else if ($qualASuaIdade > 104) {
	echo "Você ainda está vivo?";
}

else {
	echo "Idoso";
}


echo "<br>";

//Forma mais rápida para condições básicas de if e else dentro do echo.
//"?" é o if e o ":" é o else
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

 ?>