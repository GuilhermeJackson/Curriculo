<?php

$nome = (int)$_GET["a"]; //Array global

//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"]; //Mostra o endereço de ip de acesso do seu servidor

$ip = $_SERVER["SCRIPT_NAME"]; //Mostra a página que esta armanzendo o arquivo

echo $ip;

?>