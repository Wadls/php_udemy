<?php
    $pessoa =[
        'nome'=>'Jorge',
        'idade'=>16,
        'nacionalidade' => 'Italiano',
        'estadoCivil' => 'Casado'
    ];
    if ($pessoa['idade']>=18) {
        echo "<b>{$pessoa['nome']}</b> é maior de idade";
        
    } else {
        echo "<b>{$pessoa['nome']}</b> não é maior de idade";
    }
    