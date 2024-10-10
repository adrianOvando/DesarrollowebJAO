<?php
    $numero=$_GET['numero'];
    $value=$_GET['valor'];

    function fibonacci($n){
        if($n==0) return 0;
        if($n==1) return 1;
        return fibonacci($n-1)+fibonacci($n-2);
    }

    function factorial($n){
        if($n==0) return 1;
        return $n*factorial($n-1);
    }

    if($value==1){
        $r=fibonacci($numero);
        echo "El fibonacci es: ".$r;
    }else if($value==2){
        $r=factorial($numero);
        echo "El factorial es: ".$r;
    }
?>