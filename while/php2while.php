<?php 

$total = 150;
$desconto = 0.9;

do { //Faça
			//"do, while" executa pelo menos uma vez mesmo a condição sendo falsa
	$total *= $desconto;
} while ($total > 100);

echo $total; 

 ?>