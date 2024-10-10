<?php
    $num = $_GET['a'];
    echo '<a href="calculo.php?valor=1&numero=' . $num . '">Fibonacci</a><br>'; 
    echo '<a href="calculo.php?valor=2&numero=' . $num . '">Factorial</a>';
?>
