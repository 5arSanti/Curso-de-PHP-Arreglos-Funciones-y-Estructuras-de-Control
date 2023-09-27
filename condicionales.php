<?php

    $asientosDisponibles = 0;
    $esHijoDeTomHolland = true;

    if($asientosDisponibles > 0){
        echo "Puedes entrar a ver la pelicula de spider-man";
    }
    else if ($esHijoDeTomHolland){
        echo "No eres, pero puedes ver la pelicula";
    }
    else {
        echo "No puedes ver la pelicula";
    }


    echo "\n";