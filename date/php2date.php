<?php 

$ts = strtotime("now");	//hora de agora

echo date("l, d/m/Y", $ts);
echo "<br><br>";

$ts = strtotime("+1 day"); //+1 dia (próximo dia)

echo date("l, d/m/Y", $ts);
echo "<br><br>";

$ts = strtotime("+1 week");	//pega a proxima segunda-feira


echo date("l, d/m/Y", $ts);

 ?>