<?php 
include "conexion.php";
$cuenta = $_POST["cc_cuenta"];
$nombre = $_POST["cc_nombre"];
$origen = $_POST["cc_origen"];
$descargo = $_POST["cc_descargo"];
$tipo = $_POST["cc_tipo"];
$grupo = $_POST["cc_grupo"];
$retencionisr = $_POST["cc_retencionisr"];
$tipoingreso = $_POST["cc_tipoingreso"];
$tiponcf = $_POST["cc_tiponcf"];
$reporte = $_POST["cc_reporte"];
$columna606 = $_POST["cc_columna606"];
$columna607 = $_POST["cc_columna607"];
 

if ($_POST["cc_activo"] == "true") {
	$activo = "no";
}else{

	$activo = "si";


}

$q = "INSERT INTO cuentascontables(cuenta,nombre,origen,descargo,tipo,grupo,retencionisr,tipoingreso,tiponcf,reporte,columna606,columna607,activo) VALUES  ('".$cuenta."','".$nombre."','".$origen."','".$descargo."','".$tipo."','".$grupo."','".$retencionisr."','".$tipoingreso."','".$tiponcf."','".$reporte."','".$columna606."','".$columna607."','".$activo."')";


$qe = mysqli_query($con,$q);



echo mysqli_error($con);



 ?>