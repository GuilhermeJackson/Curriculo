<?php

$empresa = "Hcooode";

$empresa = str_replace("o" , "5" , $empresa);	//Troca o "o" pelo "5"
echo "<br>","<br>";
$empresa = str_replace("5" , " LOCURA " , $empresa);	//Troca o "5" de cima pelo "LOCURA".

echo $empresa;

?>