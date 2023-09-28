<?php

    $tiendaDeCafes = [
        "Americano" => 20,
        "Latte" => 25,
        "Recalentado" => 10,
        "Capuccino" => 27.5,
        "Mocca" => 24,
    ];

    foreach ($tiendaDeCafes as $name => $value) {
        if($name === "Recalentado"){
            continue;
        }
        echo "El cafe $name es muy rico \n";
    }

    echo "\n";