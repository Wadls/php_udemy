<?php
    
    $nome = NULL;
    
    echo $nome;

    if (is_null($nome)) {
        echo "A variavél nome é NULL";
    }

    $nome = 'Júlio';

    if (is_null($nome)) {
        echo "A variável nome é NULL 2";
    }