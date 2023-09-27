<?php 
    $edades = [
        "Carlos" => 20,
        "Mr.Michi" => 18,
        "Juan" => 40,
    ];

    echo "La edad de Mr.Michi es: ". $edades["Mr.Michi"];
    
    echo "\n";

    $cafes = [
        "Capuccino" => 50,
        "Latte" => 49,
        "Americano" => 70,
    ];

    echo "El precio del cafe Americano es {$cafes["Americano"]}";

    echo "\n";

    $personas = [
        "Carlos" => [
            "edad" => 20,
            "apellido" => "Santana",
        ],

        "Mr.Michi" => [
            "edad" => 18,
            "apellido" => "Michisancio",
        ],
    ];

    echo "La informacion de Mr.Michi es: \n Edad: {$personas["Mr.Michi"]["edad"]} \n Apellido: {$personas["Mr.Michi"]["apellido"]} ";

    echo "\n";
?>