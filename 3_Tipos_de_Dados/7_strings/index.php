<?php
    
    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';
    echo "Ele disse 'Olá?'<br>"; #Não dá erro, pois, estou alternando entre simples e duplas
    echo 'Então eu respondi "Marilene?"<br>';
    
    $idade = 15;

    echo "Ele tem $idade anos <br>";
    echo 'Ele tem {$idade} anos'; #A concatenação com variáveis não funciona quando a srting é construída em aspas simples