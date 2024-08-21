<?php 
    $cadena="sistemas";
    $longitud=strlen($cadena);
    echo strtoupper($cadena), "<br>";
    for($i=1;$i<$longitud-1;$i++){
        echo substr(strtoupper($cadena), $i, 1);
        for($j=1;$j<=$longitud;$i++){
            echo"&nbsp; &nbsp;";
        }
        echo substr($cadena, $longitud-$i-1, 1)."<br>";
    }
    for($k=1; $k<$longitud;$k++){
        echo substr(strtoupper($cadena), $longitud-$i-2, 1);
    }
?>