<?php 
session_id('smd9gegf9ja093j0ejf0sg9j03093');

require_once("php3config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);



 ?>