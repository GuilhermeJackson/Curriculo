<?php

// inserir depois da URL o ?a=123. ex:http://localhost/curso/php4.php/?a=123&b=456

$nome = (int)$_GET["a"]; //Array global

echo 'Inserir "?a=123" no final da url <br>';
var_dump($nome);

echo "<br>","<br>";

$ipp = $_SERVER["REMOTE_ADDR"]; //Mostra o endereço de ip de acesso do seu servidor

$ip = $_SERVER["SCRIPT_NAME"]; //Mostra a página que esta armanzendo o arquivo

echo "Endereço de ip  " . $ipp;
echo "<br>","<br>";
echo "Mostra a página que esta armanzendo o arquivo -> " . $ip;

?>