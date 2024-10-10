<?php
    $n=$_GET['n'];
    setcookie('a',$n,0);
    echo "<ul>";
    echo '<li><a href="result.php?operacion=sumatoria">Sumatoria</a></li>';
    echo '<li><a href="result.php?operacion=factorial">Factorial</a></li>';
    echo '<li><a href="result.php?operacion=fibonacci">Fibonacci</a></li>';
    echo '<li><a href="result.php?operacion=dividir">Dividir entre 2</a></li>';
    echo '</ul>';
?>