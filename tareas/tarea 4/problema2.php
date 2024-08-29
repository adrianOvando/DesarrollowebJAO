<?php
/*Realizar un programa en php que permita ordenar 
mediante el método burbuja de un arreglo definido
como $arreglo=[2,3,45,32,2,1,63,21,52,242,22,1] */

$arreglo=[2,3,45,32,2,1,63,21,52,242,22,1];

$tamano = 0;
foreach ($arreglo as $numero) {
    $tamano++;
}

for($i = 0; $i < $tamano - 1; $i++){
    for($j = 0; $j < $tamano - $i - 1; $j++){
        if($arreglo[$j] > $arreglo[$j + 1]){
            $q = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $q;
        }
    }
}
echo "Arreglo ordenado: ";
foreach($arreglo as $numero){
    echo $numero . " ";
}
?>