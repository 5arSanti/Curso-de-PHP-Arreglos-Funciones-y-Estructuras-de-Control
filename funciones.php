<?php

    function getPokemon($number) {
        switch($number) {
            case 1: echo "Pikachu"; break;
            case 2: echo "Charmander"; break;
            case 3: echo "Newtwo"; break;
            default: echo "No hay pokemon para ti."; break;
        }
    }

    for ($i=0; $i < 5; $i++) { 
        $numeroAleatorio = rand(0, 4);
        getPokemon($numeroAleatorio);
        echo "\n";
    }


    echo "\n";