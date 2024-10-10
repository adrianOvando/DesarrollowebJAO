<?php
    $num=$_COOKIE['a'];
    function sumatoria($num) {
        return ($num * ($num + 1)) / 2;
    }
    function factorial($num) {
        if ($num <= 1) {
            return 1;
        } else {
            return $num * factorial($num - 1);
        }
    }
    function fibonacci($num) {
        if ($num == 0) return 0;
        if ($num == 1) return 1;
        return fibonacci($num - 1) + fibonacci($num - 2);
    }

    switch ($operacion) {
        case 'sumatoria':
            $resultado = sumatoria($numero);
            echo "La sumatoria de $numero es: $resultado";
            break;
        case 'factorial':
            $resultado = factorial($numero);
            echo "El factorial de $numero es: $resultado";
            break;
        case 'fibonacci':
            $resultado = fibonacci($numero);
            echo "El Fibonacci de $numero es: $resultado";
            break;
        case 'dividir':
            $resultado = $numero / 2;
            echo "$numero dividido entre 2 es: $resultado";
            break;
        default:
            echo "Operación no válida";
            break;
    }
       else {
    echo "No se ha establecido ningún número en la cookie.";
}
?>