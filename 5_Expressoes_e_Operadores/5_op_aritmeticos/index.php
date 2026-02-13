<?php

    $soma = 8 + 4;
    $subtracao = 8 - 4;
    $divisao = 8 / 4;
    $multiplicacao = 8 * 4;

    echo "<b>Soma: </b>$soma<br>";
    echo "<b>Subtração: </b>$subtracao<br>";
    echo "<b>Divisão: </b>$divisao<br>";
    echo "<b>Multiplicação: </b>$multiplicacao<br>";
    echo "<b>Operação: </b>" . $multiplicacao + $soma * ($subtracao/$divisao);
    