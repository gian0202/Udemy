<?php
//$anoNascimento = 1900;
//$nomeCompleto= "";

$nome1 = "joao";
$sobrenome  ="Rangel";
// para juntar os dois, isso se chama concatenação 
$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto;

echo"<br/>";

unset($nome1);

if(isset($nome1)){

echo $nome1;
}
?>