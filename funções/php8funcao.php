<?php 

function soma(int ...$valores):string {  //Diz q todos os paramentros são int
	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo var_dump(soma(1.5, 3.2));
echo "<br>";
 ?>