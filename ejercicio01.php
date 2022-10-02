<?php
$Nombre = $_POST["nombre"];
$hijos = $_POST["hijos"];
$total_vendido = $_POST["total_vendido"];
$sueldo_basico = 600;
$bonificacion = 50*$hijos;
$comision = 0.075*$total_vendido;
$sueldo_bruto = $sueldo_basico+$comision+$bonificacion;
$descuento = $sueldo_bruto*0.11;
$sueldo_neto = $sueldo_bruto-$descuento;
echo "NOMBRE : ". $Nombre;
echo "<br>";
echo "N° HIJOS : ". $hijos;
echo "<br>";
echo "BONIFICACION : ". $bonificacion;
echo "<br>";
echo "COMISION : " .$comision;
echo "<br>";
echo "DESCUENTO : ".$descuento;
echo "<br>";
echo "SUELDO BASICO : ". $sueldo_basico;
echo "<br>";
echo "SUELDO BRUTO : ". $sueldo_bruto;
echo "<br>";
echo "SUELDO NETO : ". $sueldo_neto;
?>
