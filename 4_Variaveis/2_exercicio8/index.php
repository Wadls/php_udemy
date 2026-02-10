<?php
    $string = "Sou usado para arquivos de texto";
    $int = 10;
    $float = 2.0;
    $array = [
        'Sou',
        'um conjunto',
        'de qualquer',
        'dado'
    ];

    echo " <b>Tipo de Dado string:</b>'$string' <br>";
    echo " <b>Tipo Dado inteiro:</b>'$int' <br>";
    echo " <b>Tipo Dado ponto flutuante:</b>'$float' <br>";

    //Um array não pode ser declarado como uma variável única
    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";
    
