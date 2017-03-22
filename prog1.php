<?php 
// Crea variables
$edad = 36; 
$precio = 35.12;
$nombre = "David";

// System.out.println
echo $edad;
echo $nombre;
echo "<br><br> Hola";
echo "<br> Adios $nombre";

// Operaciones
$op1 = 6;
$op2 = 3;
$suma = $op1 + $op2;
$resta = $op1 - $op2;
$mult = $op1 * $op2;
$div = $op1 / $op2;
$resto = $op1 % $op2;

echo "<br><br>";
echo "Suma: ".$suma."<br>";
echo "Resta: ".$resta."<br>";
echo "Multiplicacion: ".$mult."<br>";
echo "Division: ".$div."<br>";
echo "Resto: ".$resto."<br>";

// Para decir el tipo de variable (gettype). Se puede hacer de las dos maneras
echo "La varialbe \$op1 vale $op1 y su tipo es: " .gettype($op1). "<br>";
settype($op1,"double");
echo "La varialbe \$op1 vale " .$op1. " y su tipo es: " .gettype($op1). "<br>";

// Para elegir el tipo de variable previamente
$op3 = 10;
$op4 = 5;
$suma = (double) $op3 + $op4;

?>
