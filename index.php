<?php

class LibreriaMatematicas {
    
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }
    
    public function restar($num1, $num2) {
        return $num1 - $num2;
    }
    
    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }
    
    public function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: No se puede dividir por cero";
        }
    }
}
?>