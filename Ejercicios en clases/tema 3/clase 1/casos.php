<?php 
    $numeros=array(1,2,3,4,5,6,7,8,9,0);
    $mayor=$numeros[0];
?>
<h1>Con ciclo for</h1>
<?php
    for($i=1;$i<count($numeros);$i++)
    {
        if($numeros[$i]>$mayor)
        {
            $mayor=$numeros[$i];
        }
    }
    echo "El numero mayor es: $mayor";
?>
