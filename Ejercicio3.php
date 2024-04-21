
<?php
function esPalindromo($cadena) {
    // Eliminamos los espacios en blanco y signos de puntuación
    $cadena = preg_replace('/[^a-zA-Z0-9]/', '', $cadena);
    
    // Obtenemos la longitud de la cadena
    $longitud = strlen($cadena);
    
    // Iteramos hasta la mitad de la cadena
    for ($contador = 0; $contador < $longitud / 2; $contador++) {
        // Comparamos el carácter actual con su correspondiente desde el final
        if (strtolower($cadena[$contador]) !== strtolower($cadena[$longitud - $contador - 1])) {
            // Si no coinciden, la cadena no es un palíndromo
            return false;
        }
    }
    
    // Si la iteración termina sin encontrar ninguna discrepancia, la cadena es un palíndromo
    return true;
}

$cadena = "oso";
if (esPalindromo($cadena)) {
    echo "'$cadena' es un palíndromo.";
} else {
    echo "'$cadena' no es un palíndromo.";
}

?>
