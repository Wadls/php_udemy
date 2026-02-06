<?php
    $gol = [
        'marca' => 'Volkswagen',
        'ano' => 2022,
        'cor' => 'Branco',
        'versao' => 'G8'
    ];

    echo $gol['marca'];
    echo "<br>";
    echo $gol['versao'];
    echo "<br>";
    echo "O carro que eu tenho é da {$gol['marca']}, ano {$gol['ano']}";
    echo "<pre>";
    print_r($gol);
    echo "</pre>";


