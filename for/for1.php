<?php 

for ($i = 0; /*da valor inicial*/ $i < 10; /* fazer até menor ou igual a 10*/ $i++) { 	/*incremento*/

	echo $i."<br>";
}

echo "<br>","<br>";

for ($t = 0; $t < 1000; $t += 5){	//enquanto $t for menor que 100 contar de 5 em 5

	echo $t."<br>";
}

echo "<br>","<br>";

for ($r = 0; $r < 1000; $r += 5){	//se $r for menos que 100, contar 5 em 5

	if ($r >= 200 && $r <= 800 ) continue;	//se $r for maior que 200 e menor que 800, não contar

	if ($r === 900) break;	// parar de rodar quando $r for exatamente igual a 900

	echo $r."<br>";
}


 ?>