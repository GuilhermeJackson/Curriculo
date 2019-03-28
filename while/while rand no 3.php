<?php 

$condicao = true;

while ($condicao) {	//enquanto retornar true ele faz

	$numero = rand(1, 10);	//rand = sorteia um número de 1 a 10. Função do php

	if ($numero === 3) {	//quando foir 3 ele vai escrever TREIS!!!
		echo "TREIS!!!";
		$condicao = false;	// para a execução quando recebe o 3 (Loop inifinito se não colocar)
	}
	echo $numero . " ";
}

 /*while = usa para qualquer assunto desde que a condição ser verdadeira e nem precisa ter sequencia

 foreach = usa para array e coleções

 for = tem o valor inicial, valor final e incremento*/
 ?>

