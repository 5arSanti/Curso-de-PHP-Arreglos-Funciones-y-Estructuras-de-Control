<?php

    function clear(){
        if(PHP_OS === "WINNT"){
            system("cls");
        }
        else{
            system("clear");
        }
    }

    $possibleWord = ["Bebida", "Prisma", "Ala", "Dolor", "Piloto", "Baldosa", "Terremoto", "Asteroide", "Gallo", "Platzi"];

    const MAX_ATTEMPS = 6;

    echo "Juego del Ahorcado! \n\n";

    //Inicializar
    $choosenWord = $possibleWord[rand(0, count($possibleWord))];
    $choosenWord = strtolower($choosenWord);
    $wordLength = strlen($choosenWord);

    $discoveredLetters = str_pad("", $wordLength, "_");

    $attemps = 0;

    do{
        echo "Palabra de $wordLength letras \n\n";
        echo "$discoveredLetters \n\n";

        //Pedir las letras
        $playerLetter = readline("Escribe una letra: ");
        $playerLetter = strtolower($playerLetter);

        if(str_contains($choosenWord, $playerLetter)){
            //Verificar todas las ocurrencias de esta letra para reemplazarla
            $offset = 0;
            while(($letterPosition = strpos($choosenWord, $playerLetter, $offset)) !== false ){

                $discoveredLetters[$letterPosition] = $playerLetter;
                $offset = $letterPosition + 1;
            }
        }
        else {
            clear();
            $attemps++;
            echo "Letra incorrecta! Te quedan " . (MAX_ATTEMPS - $attemps) . " intentos \n";
            sleep(1);
        }
        clear();
    } while ($attemps < MAX_ATTEMPS && $discoveredLetters != $choosenWord);
    
    clear();

    if ($attemps < MAX_ATTEMPS){
        echo "¡Felicidades! Has adivinado la palabra! \n\n";
    }
    else{
        echo "Perdiste! Suerte para la proxima amigo! \n\n";
    }

    echo "La palabra es $choosenWord \n";
    echo "Tu descubriste $discoveredLetters \n";

    echo "\n";