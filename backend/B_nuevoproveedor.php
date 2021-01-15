<?php 
include 'conexion.php';

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

if ($tipocuenta == 'No existe') {
	echo "noexiste";
	exit();
}else{



if (empty($_POST["inactivo"])) {
	$inactivo = 'si';
}else{
	$inactivo = 'no';
}



$mquery1 = "INSERT INTO proveedor VALUES(0,'".$nombre."','".$cedularnc."','".$tipodocumento."','".$pais."','".$provincia."','".$sector."','".$direccion."','".$codigopostal."','".$sitioweb."','".$email."','0','".$catalogocredito."','".$codigoasignado."','".$inicioncf."','".$tipoproveedor."','".$limite."','".$condicion."','".$comision."',NOW(),'".$inactivo."')";

$query1 = mysqli_query($con,$mquery1);


$idpr = mysqli_insert_id($con);


$q = "INSERT INTO telefonoproveedor(telefono,tipotelefono,idproveedor,importancia) VALUES ('".$telefono."','celular','".$idpr."','principal')";

$qe = mysqli_query($con,$q);



echo $idpr;



}
 ?>

