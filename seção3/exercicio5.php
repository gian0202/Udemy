<?php
    $nome = "Gian";
    function teste() {
        global $nome;
    echo $nome;
    
    }
    function teste2(){
       $nome = "Marcos";
    echo " e " . $nome. " Agora no teste 2";
    }
teste();
teste2();

?>


