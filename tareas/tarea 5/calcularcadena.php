<?php
/*Crear la clase OperacionesCadena 
con la propiedad cadena que debe debe ser inicializada con valor en el constructor,
luego crear los metodos
invertir ,que imprime la cadena invertida
mayuscula , que imprime la cadena en mayúsculas
minuscula, que imprime la cadena en minúsculas
, luego crear un formulario que solicite una cadena "formcadena.html" este formulario 
llamara a calcularcadena.php el cual hace uso de la clase 
OperacionesCadena  ,y muestra la cadena invertida, en mayúsculas y en minúsculas*/

class OperacionesCadena {
    public $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }
    public function invertir() {
        $invertida= '';
        $max= 100; 
        for ($i=0; $i<$max; $i++) {
            if ($this->cadena[$i]=='') {
                break;
            }
            $invertida= $this->cadena[$i].$invertida;
        }
        echo "Cadena invertida: $invertida<br>";
    }
    public function mayuscula() {
        $resultado= '';
        $minusculas= 'abcdefghijklmnopqrstuvwxyz';
        $mayusculas= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($i=0; $i<100; $i++) {
            if ($this->cadena[$i]=='') {
                break;
            }
            $letra= $this->cadena[$i];
            $convertida= $letra;
            for ($j=0; $j<26; $j++) {
                if ($letra==$minusculas[$j]) {
                    $convertida = $mayusculas[$j];
                    break;
                }
            }
            $resultado = $resultado.$convertida; //No sabia que se podia concatenar resultados
        }
        echo "Cadena en mayúsculas: $resultado<br>";
    }
    public function minuscula() {
        $resultado= '';
        $minusculas= 'abcdefghijklmnopqrstuvwxyz';
        $mayusculas= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for ($i=0; $i<100; $i++) {
            if ($this->cadena[$i] == '') {
                break;
            }
            $letra= $this->cadena[$i];
            $convertida= $letra;
            for ($j=0; $j<26; $j++) {
                if ($letra==$mayusculas[$j]) {
                    $convertida= $minusculas[$j];
                    break;
                }
            }
            $resultado .= $convertida;
        }
        echo "Cadena en minúsculas: $resultado<br>";
    }
}


$cadena = $_POST['cadena'];
$operacion = new OperacionesCadena($cadena);

$operacion->invertir();
$operacion->mayuscula();
$operacion->minuscula();

?>



