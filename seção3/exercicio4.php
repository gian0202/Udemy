<?php
//$nome = $_GET["a"];
// eu quero um numero inteiro, como faço ?
// simples, é so converter o GET:
//$nome =(int)$_GET["a"];

//var_dump($nome);
//$ip = $_SERVER["REMOTE_ADDR"];

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>