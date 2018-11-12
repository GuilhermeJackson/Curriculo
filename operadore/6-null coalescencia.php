<?php

$a = Null;

$b = Null;

$c = 10;

$d = Null;	

echo $a ?? $b ?? $c ?? $d;
//O sinal " ?? " faz com que pule os valores Null.

?>