<?php 

$total = 150;
$desconto = 0.9;

do { //Faça
			//"do, while" executa pelo menos uma vez mesmo a condição sendo falsa
	$total *= $desconto;	//total igual ele mesmo vezes o desconto.

} while ($total > 100);	// apenas enquanto o total for acima de 100

echo $total; 

// do while é pelo menos um desconto

 ?>