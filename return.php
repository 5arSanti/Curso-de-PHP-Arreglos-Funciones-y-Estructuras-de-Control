<?php
    function freddy ($numeroAleatorio) {
        switch ($numeroAleatorio) {
            case 1: return "Nunca pares de aprender! "; break;
            case 2: return "Las empresas no son familia! "; break;
            case 3: return "La tecnologia es el futuro! "; break;
            case 4: return "Amo PHP! "; break;
            default: return "Jeje"; break;
        }
    }

    for ($i=0 ; $i < 5 ; $i++ ) { 
        $numeroAleatorio = rand(0, 5);
        echo freddy($numeroAleatorio) . "\n";
    }