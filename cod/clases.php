<?php

class Calculadora {
    
    function suma($val1, $val2) {
        $res = $val1 + $val2;
        return $res;
    }

    function resta($val1, $val2) {
        $res = $val1 - $val2;
        return $res;
    }

    function multiplicacion($val1, $val2) {
        $res = $val1 * $val2;
        return $res;
    }

    function division($val1, $val2) {
        $res = $val1 / $val2;
        return $res;
    }

}

$var1 = 20; 
$var2 = 10;

echo "El resultado de la suma es : " . Calculadora::suma($var1, $var2);
echo "<br>";
echo "El resultado de la resta es : " . Calculadora::resta($var1, $var2);
echo "<br>";
echo "El resultado de la multiplicacion es : " . Calculadora::multiplicacion($var1, $var2);
echo "<br>";
echo "El resultado de la division es : " . Calculadora::division($var1, $var2);

?>