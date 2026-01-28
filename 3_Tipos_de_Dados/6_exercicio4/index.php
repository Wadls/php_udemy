<?php
    $primeiroFloat = 5.32;
    $segundoFloat = 7.02;
    $terceiroFloat = 7.25;
    
    echo "Já são <b>{$primeiroFloat}h</b><br>Pretendo estudar até as <b>{$segundoFloat}h</b><br>Provável que eu faça meu café da manhã as <b>{$terceiroFloat}h</b>";

    if (is_float($primeiroFloat)) {
        echo"<br><i>Ps: {$primeiroFloat} é um float";
        # code...
    }