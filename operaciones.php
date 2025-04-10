<?php
// Alexander Adonai Molina Rodríguez - 242310131 - Ing. Informática - POO

// Incluir la clase
require_once 'actividad_metodos.php';

// Llamar al método de clase (estático)
echo Calculadora::mostrarMensaje() . "<br>";

// Crear una instancia de la clase
$miCalculadora = new Calculadora();

// Usar los métodos de intancia
echo "Suma de 5 + 3: " . $miCalculadora->sumar(5, 3) . "<br>";
echo "Multiplicación de 4 * 2: " . $miCalculadora->multiplicar(4, 2) . "<br>";
echo "Resta de 8 - 6: " . $miCalculadora->restar(8, 6) . "<br>";
echo "División de 20 / 5: " . $miCalculadora->dividir(20, 5) . "<br>";
?>