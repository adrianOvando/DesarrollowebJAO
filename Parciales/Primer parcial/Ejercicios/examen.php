<?php
    class Examen{
        private $cadena1;
        private $cadena2;

        public function __construct($cadena1, $cadena2)
        {
            $this->cadena1=$cadena1;
            $this->cadena2=$cadena2;
        }

        public function cruzar(){

            $encontro=false;
            for($i = 0; $i<strlen($this->cadena1); $i++)
            {
                for($j=0; $j<strlen($this->cadena2); $j++)
                {
                    if($this->cadena[$i] == $this->cadena[$j])
                    $encontro=true;
                    
                }
            }
            echo $i.$j;
            echo "Cadena1 en su posicion $i cohencidi con cadena 2 en su posicion 2 $j";
        }
    }

?>