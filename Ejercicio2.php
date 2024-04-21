<?php

function esPrimo($numero) {
    // Si el número es menor o igual a 1, no es primo
    if ($numero <= 1) {
        return false;
    }

    // Iteramos desde 2 hasta la mitad del número para verificar si es divisible
    for ($contador = 2; $contador <= $numero / 2; $contador++) {
        // Si el número es divisible por algún otro número que no sea 1 o él mismo, no es primo
        if ($numero % $contador == 0) {
            return false;
        }
    }

    // Si el bucle termina sin encontrar ningún divisor, el número es primo
    return true;
}

$numero = 7;
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}

?>
