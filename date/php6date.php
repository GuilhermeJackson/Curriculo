<?php 

$dt = new DateTime(); //Instaciando

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");	//"->" Acessar um método.  "format" È um método igual a função date

 ?>