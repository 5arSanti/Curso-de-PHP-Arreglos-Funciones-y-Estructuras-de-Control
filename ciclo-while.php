<?php
    $count = 0;
    while ($count <= 10) {
        echo "$count \n";
        $count++;
    };

    echo "\n";

    $usernames = ["Pepito", "Mr.Michi", "Santiago"];
    do {
        $user = readline("Por favor ingresa tu nombre: ");

        if(in_array($user, $usernames)){
            echo "Digite un nombre que no este registrado";
        }
        else{
            array_push($usernames, $user);
        }

        var_dump($usernames);
        echo "\n";

    } while (in_array($user, $usernames));

    echo "\n";