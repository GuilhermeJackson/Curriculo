<?php 

$diadasemana = 8//date("w"); 	//date("w") = o dia da semana

switch ($diadasemana) {

	case 0:				//Cria o CASO na posição "zero". ":" significa um "if"
	echo "Domingo";
	break;				// break; = é para não continuar rodando para o case 1

	case 1:
	echo "Segunda";
	break;

	case 2:
	echo "Terça";
	break;

	case 3:
	echo "Quarta";
	break;

	case 4:
	echo "Quinta";
	break;

	case 5:
	echo "Sexta";
	break;

	case 6:
	echo "Sabado";
	break;

	default:
	echo "Data inválida!"; 		// se não cair no resultado esperado pelos "case", o retorno padrão é o "default"

}


 ?>
