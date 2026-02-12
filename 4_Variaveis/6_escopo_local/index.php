<?php
    //Variável em escopo global são variáveis que declaramos normalmente
    $x = 8;
    
    function local(){
        $x = 4; 
        $y = 6
        echo "Variável em contexto local x: $x <br>";
    }

    echo "Variável em contexto global x: $x <br>";
    local();

    // echo "Variável em contexto global y: $y <br>";
    
    //Chamar $y fora da função causa um erro, pois ela só existe no escopo local (dentro da função), e fora da função a variavél não existe
    