<?php

    $edades = [18, 22, 40, 34];

    //Count === .length => Tamaño del array
    echo count($edades);

    //Array_push => Agrega al array
    array_push($edades, 15);
    var_dump($edades);

    //is_array => Para saber si es un array
    $estoNoEsUnArreglo = "";
    var_dump(is_array($edades));

    //explode
    $listaDeFrutas = "fresa,cereza,manzana";
    $arrayListaDeFrutas = explode(",", $listaDeFrutas);
    var_dump($arrayListaDeFrutas);


    //implode
    $arrayListaDeFrutas = ["fresa", "cereza", "manzana"];
    $listaDeFrutas = implode(", ", $arrayListaDeFrutas);
    var_dump($listaDeFrutas);

    echo "\n";