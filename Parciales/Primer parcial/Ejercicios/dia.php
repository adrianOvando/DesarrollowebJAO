<?php
    $n=$_GET['n'];
    if($n<=7){
        echo '<select name="dias">';
            if($n==1){
                echo '<option value="1" selected>Lunes</option>';}
            if($n==2){
                echo '<option value="2" selected>Martes</option>';}
            if($n==3){
                echo '<option value="3" selected>Miercoles</option>';}
            if($n==4){
                echo '<option value="4" selected>Jueves</option>';}
            if($n==5){
                echo '<option value="5" selected>Viernes</option>';}
            if($n==6){
                echo '<option value="6" selected>Sabado</option>';}
            if($n==7){
                echo '<option value="7" selected>Domingo</option>';}
        echo '</select>';
        echo '</form>';
    }else echo "Solo del 1 al 7";
?>

