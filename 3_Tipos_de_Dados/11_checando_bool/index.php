<?php
    $verdadeiro = true;
    $falso = false;

    if (is_bool($verdadeiro) and is_bool($falso)) {

        echo "As variavéis são boolenaos<br>";
        
    }

    if (0.0 == $falso and 0 == $falso and []==$falso) {
        echo "0.0 | 0 | [ ] | todos são considerados iguais a False";
    }