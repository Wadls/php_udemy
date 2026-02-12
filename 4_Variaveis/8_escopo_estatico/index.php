<?php

    function contadorLocal(){
        $contador = 0;
        $contador++;
        echo "$contador <br>";
    }
    contadorLocal();
    contadorLocal();
    contadorLocal();
    function contadorEstatico(){
        static $contador = 0;
        $contador++;
        echo "$contador <br>";
    }
    contadorEstatico();
    contadorEstatico();
    contadorEstatico();
    
    //A variável continua inacessível no escopo global, porém a função não reseta o valor da variável
    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";