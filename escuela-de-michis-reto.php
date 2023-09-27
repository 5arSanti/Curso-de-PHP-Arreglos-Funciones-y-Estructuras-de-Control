<?php

    $escuelaDeMichis = [
        [
            "Nombre" => "Lion",
            "Ocupacion" => "Amo de Casa",
            "Color" => "Naranja",
            "Comidas" => [
                "Comidas Favoritas" => [
                    "Catsy",
                    "Arequipe"
                ],
                "Comidas NoGustan" => [
                    "Whiskas",
                    "Mirringo"
                ]
            ],
        ],
        [
            "Nombre" => "Orion",
            "Ocupacion" => "Esposo",
            "Color" => "Naranja con Blanco",
            "Comidas" => [
                "Comidas Favoritas" => [
                    "Felix",
                    "Carne"
                ],
                "Comidas NoGustan" => [
                    "Dulce",
                    "CatNice"
                ]
            ],
        ],
        [
            "Nombre" => "Kira",
            "Ocupacion" => "Esposa",
            "Color" => "Gris con Dorado",
            "Comidas" => [
                "Comidas Favoritas" => [
                    "Pollo",
                    "Dulce"
                ],
                "Comidas NoGustan" => [
                    "Whiskas",
                    "Mirringo"
                ]
            ],
        ],
    ];

    echo "Las comidas favoritas de Lion son: " . implode(", ", $escuelaDeMichis[0]["Comidas"]["Comidas Favoritas"]) . "\n";
    echo "El color de Lion es: " .  $escuelaDeMichis[0]["Color"] . "\n";


    echo "\n";