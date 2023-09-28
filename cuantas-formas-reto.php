<?php

    /*
        1 => 0
        2 => 1
        3 => 2
        4 => 3
        5 => 5
        6 => 8
        7 => 13
        8 => 21
    */
    $numeroDeTiemda = readline("Digite en numero de tienda: ");
    $valor1 = 0;
    $valor2 = 1;

    for ($i = 0; $i < $numeroDeTiemda - 1; $i++) { 
        if ($numeroDeTiemda === 1){
            echo "Ya te encuentras en esta tienda.";
            break;
        }
        $resultado = $valor1 + $valor2;
        if($i === $numeroDeTiemda - 2){
            echo "El numero de caminos es $resultado";
        }
        $valor1 = $valor2;
        $valor2 = $resultado; 
    }

    echo "\n";