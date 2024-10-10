<?php include ('Examen.php');

    $cadena1=$_POST['cadena1'];
    $cadena2=$_POST['cadena2'];

    $e=new Examen($cadena1, $cadena2);

    $e->cruzar();
?>