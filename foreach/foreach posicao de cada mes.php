<?php 

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Jungo",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {	// Para cada mes que percorrer ele vai fazer alguma ação no mês. O index é para saber a posição de cada mês.
	echo "Indice: " .$index."<br>";
	echo "O mês é: ".$mes."<br><br>";
}

 ?>