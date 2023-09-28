<?php

    function sumar($value1 = 1, $value2 = 2) {
        echo "La suma de $value1 + $value2 es " . ($value1 + $value2) . "\n";
    }

    // sumar();

    // $array1 = [1, 2, 3];
    // $array2 = [4, 5, 6];

    // $resultado = [...$array1, ...$array2];
    // var_dump($resultado);

    $numeros = [1,2];

    sumar(...$numeros);

    function sumaInfinita (... $props) {
        $suma = 0;
        foreach ($props as $number) {
            $suma += $number;
        }
        return $suma;
    }

    
    echo "La suma es " . sumaInfinita(1,2,3,4,5,6,7,8,9) . "\n";

