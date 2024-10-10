<?php
    class Examen{
        private $n;
        private $cadena;
        private $a;
        private $b;
        private $c;
        public function __construct($n,$cadena,$a,$b,$c)
        {
            $this->n=$n;
            $this->cadena=$cadena;
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        public function Calcularfibonacci($n) {

            if ($n == 0) return 0;  
            if ($n == 1) return 1;  
            return $this->Calcularfibonacci($n - 1) + $this->Calcularfibonacci($n - 2); 
        }

        Public function Mayor($a,$b,$c){
            if($a>$b && $a>$c){
                echo "<b>$a</b>";
            }else if($b>$a && $b>$c){
                echo "<b>$b</b>";
            }else if($c>$a && $c>$b){
                echo "<b>$c</b>";
            } 
        }
        
        public function piramide() {
            $longitud = strlen($this->cadena);
            for ($i = 0; $i < $longitud; $i++) {
                echo substr($this->cadena, $i) . "<br>";
            }
        }
    }
?>