<?php
$a=$_POST['a'];
$b=$_POST['b'];

setcookie('a', $a,0); 
setcookie('b', $b,0);
echo '<url>';
echo '<li><a href="resulatado.php?operacion=suma">suma</a></li>';
echo '<li><a href="resulatado.php?operacion=resta">resta</a></li>';
echo '<li><a href="resulatado.php?operacion=multiplicacion">multiplicacion</a></li>';
echo '</ul>';
?>