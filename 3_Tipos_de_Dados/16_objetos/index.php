<?php

    class Pessoa {

        function falar(){
            echo 'Fala Galerinhha!';
        }
    }
    $matheus = new Pessoa();

    $matheus-> nome = "Matheus"; // Declarei um Atributo não registrado na classe original

    echo $matheus->nome;

    echo "<br>";

    $matheus->falar(); //Chamei a Função falar(), registrada na classe php