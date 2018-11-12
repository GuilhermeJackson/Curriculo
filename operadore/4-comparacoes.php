<?php
$a = 30;

$b = 55.0;

$c = 55;


$d = 55.3;
echo "A = " , $a , "<br>" , "B = ", $b ,"<br>" , "C = " , $c , "<br>" , "D = " , $d , "<br>";


echo "<br>","<br>";
echo "> Menor que: ";
var_dump($a > $b);

echo "<br>";

echo "< Maior que: ";
var_dump($a < $b);

echo "<br>";

echo "= Atribui o mesmo valor para o outro: ";
var_dump($a = $b);  //Fica com o mesmo valor que a outra varievel (atribuição) = 55;

echo "<br>";

echo "== Só compara: ";
var_dump($c == $b); //Comparação de valor e devolve um bool

echo "<br>";

echo "=== Exatamente igual: ";
var_dump ($d===$b);	//Compração de valor e tipo denvolvendo um bool

echo "<br>";

echo "!= Valor Diferente: ";
var_dump($a != $b);	//Compração de diferente de valor

echo "<br>";

echo "!== Valor e Tipo Diferente: ";
var_dump($a !== $b);	//Compração de diferente de valor e tipo


?>