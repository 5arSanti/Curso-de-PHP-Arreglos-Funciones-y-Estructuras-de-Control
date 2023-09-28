<?php
    $preciosDelCafe = [12 ,56,32,89,2,1];

    usort($preciosDelCafe, function($a, $b){
        return ($a <=> $b);
    });

    var_dump($preciosDelCafe);