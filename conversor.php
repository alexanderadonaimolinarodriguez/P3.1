<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO

// Incluir la clase
require_once 'actividad_metodos.php';

// Llamar al método de clase (estático)
echo Calculadora::mostrarMensaje() . "<br>";

// Crear una instancia de la clase
$miCalculadora = new Calculadora();

// Usar los métodos de intancia
echo "Celsius a Fahrenheit 25: " . $miCalculadora->celsiusAFahrenheit(25) . "<br>";
?>