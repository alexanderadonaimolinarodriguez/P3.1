<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO

class Calculadora {
    // Método de instancia para sumar
    public function sumar($a, $b) {
        return $a + $b;
    }

    // Método de instancia para multiplicar 
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // Método de instancia (estático) para mostrar un mensaje
    public static function mostrarMensaje() {
        return "Bienvenido a la calculadora en PHP";
    }

    // Método de instancia para multiplicar 
    public function restar($a, $b) {
        return $a - $b;
    }

    // Método de instancia para dividir 
    public function dividir($a, $b) {
        return $a / $b;
    }

    // Método de instancia (estático) para mostrar un mensaje
    public static function celsiusAFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
}
?>