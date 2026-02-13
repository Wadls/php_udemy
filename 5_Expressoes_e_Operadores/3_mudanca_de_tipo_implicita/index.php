<?php

    $valorInteiro = 25;
    $torneiFloat = $valorInteiro/10;
    $torneiString =  "O" . $valorInteiro;
    
    echo "$valorInteiro <br><b>Tornei Float: </b>$torneiFloat<br><b>Tornei String: </b>$torneiString<br>";
    
    if (is_float($torneiFloat)) {
        echo "$torneiFloat é float<br>";
    }
    if (is_string($torneiString)) {
        echo "$torneiString é String<br>";
    }