<?php 	

include "conexion.php";

$idproveedor = $_POST["idproveedor"];
$nombre = $_POST["nombre"];
$cedularnc = $_POST["cedularnc"];
$pais = $_POST["pais"];
$provincia = $_POST["provincia"];
$sector = $_POST["sector"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$codigopostal = $_POST["codigopostal"];
$sitioweb = $_POST["sitioweb"];
$tipodocumento = $_POST["tipodocumento"];
$limite = $_POST["limite"];
$condicion = $_POST["condicion"];
$catalogocredito = $_POST["catalogocredito"];
$codigoasignado = $_POST["codigoasignado"];
$comision = $_POST["comision"];
$inicioncf = $_POST["inicioncf"];
$tipoproveedor = $_POST["tipoproveedor"];
$telefono = $_POST["telefono"];
$tipocuenta = $_POST["tipocuenta"];

$query = "UPDATE proveedor SET nombreproveedor='$nombre', documento='$cedularnc', tipodocumento='$tipodocumento', pais='$pais', provincia='$provincia', sector='$sector', direccion='$direccion', codigopostal='$codigopostal', sitioweb= '$sitioweb', email='$email', catalogocredito='$catalogocredito', codigoasig='$codigoasignado', inicioncf='$inicioncf', tipoproveedor='$tipoproveedor', limite='$limite', condicion='$condicion', comision='$comision' WHERE idproveedor='$idproveedor'";

echo mysqli_query($con,$query);


 ?>