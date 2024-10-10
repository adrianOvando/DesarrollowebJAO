<?php
include ('Examen.php');
    $num=$_GET['n'];
    $caden=$_GET['cadena'];
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    
    $o=new Examen($num,$caden,$a,$b,$c);

    $o->Calcularfibonacci($num);
    $o->Mayor($a,$b,$c);
    $o->piramide();
?>