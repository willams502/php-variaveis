<?php
    // variaveis
    $cor = "azul"; // se a variavel repetir de nome será imprimida a ultima variavel declarada.
    $_exemplo = "teste";//não pode iniciar uma vairavel com numeros. 
    $x = 10;
    $y = 7.2;
    function teste(){
        global $x, $y, $z; // para usar uma variavel de fora da função precisa inserir o comando global, caso o contrario precisa declarar a variavel dentro da função. 
        $z = $x + $y;
        echo "O valor de X dentro da função: $x";
    }
    teste();
    echo"<br>O valor de x fora: $z";
    //echo $cor;
    // o comando global define a variavel para ser utilizada dentro e fora das funções. 
?>