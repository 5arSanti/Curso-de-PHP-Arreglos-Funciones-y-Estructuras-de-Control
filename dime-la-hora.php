<?php

    function obtener_hora() {
        return date("h:i:s a");
    }

    echo "Hola, me podrias decir la hora? \n";
    echo "Claro! Son las " . obtener_hora() . "\n";


