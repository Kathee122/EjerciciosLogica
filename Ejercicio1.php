<?php
function generarFibonacci($n) {
    // Inicializar los primeros dos términos de la serie
    $fibonacci = array(0, 1);

    // Comprobar si se solicita solo el primer término
    if ($n == 1) {
        return array(0);
    }

    // Generar los términos restantes de la serie
    for ($i = 2; $i < $n; $i++) {
        // El siguiente término es la suma de los dos anteriores
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Devolver la serie Fibonacci generada
    return $fibonacci;
}

$n = 10;
$resultado = generarFibonacci($n);

// Mostrar los términos generados de la serie Fibonacci
echo "Los primeros $n términos de la serie Fibonacci son: ";
foreach ($resultado as $numero) {
    echo $numero . " ";
}
?>

