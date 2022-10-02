<?php
echo "Precio de la gaseosa S/10.00";echo "<br>";
$Nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = 10;
$nuevo_precio = 0.05 * $precio;
$total = $cantidad * $nuevo_precio;
$importe = $total * 0.07;
echo "Nombre : " .$Nombre;
echo "<br>";
echo "Cantidad : " .$cantidad;
echo "<br>";
echo "descuento: ". $total;
echo "<br>";
echo "Importe: ". $importe;
echo "<br>";
echo "Obsequio ". $cantidad * 2;
echo " Caramelos";
?>
