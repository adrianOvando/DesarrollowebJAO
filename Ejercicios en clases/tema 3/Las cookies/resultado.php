<?php
$a=$_COOKIE['a'];
$a=$_COOKIE['b'];
$r=$_GET['operacion'];
$total=0;
switch($r){
    case "suma";
    $total=$a+$b;
    echo "suma $total <br>";
    break;
    case "restar";
    $total=$a-$b;
    echo "resta $total <br>";
    break;
    case "multiplicacion";
    $total=$a*$b;
    echo "multiplicacion $total <br>";
    break;
}
?>