<?php

    $tiendaDeCafes = [
        "Americano" => 20,
        "Latte" => 25,
        "Capuccino" => 27.5,
        "Mocca" => 24,
    ];

    foreach($tiendaDeCafes as $name => $price){
        echo "El cafe $name cuesta: $ $price USD";
        echo "\n";
    }

    echo "\n";
