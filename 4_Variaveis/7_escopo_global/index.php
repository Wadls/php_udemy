<?php
    $escopo = 'global';
    echo "<b>$escopo</b><br>";

    if (TRUE){
        $escopo = 'global dentro do if';
        echo "<b>$escopo</b><br>";
        }
        
    function errada(){
        echo "$escopo";
        #Essa variável não existe dentro do escopo dessa função, então vai dar erro
    }
    //errada();
    function correta(){
        global $escopo;
        $escopo = "Continua Global";
        echo "<b>$escopo</b><br>";
        
        global $escopoLocal;
        $escopoLocal = "Sou local mas virei global";
    }
    correta();
    echo "<b>$escopoLocal</b><br>";
            