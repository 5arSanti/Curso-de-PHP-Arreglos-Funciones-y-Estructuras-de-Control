<?php

    function esEstudianteLegend ($platziRank) {
        if ($platziRank >= 20000){
            echo "Eres un estudiante legend!";
        }
        else{
            echo "No eres estudiante Legend.";
        }
    }

    $numberOfPoint = (int) readline("Digita tus puntos: ");
    esEstudianteLegend($numberOfPoint);

    echo "\n";