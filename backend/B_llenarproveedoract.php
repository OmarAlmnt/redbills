<?php 

include "conexion.php";
$idprv = $_POST["idprv"];



$q = "SELECT * FROM proveedor WHERE idproveedor ='".$idprv."'";




$qe = mysqli_query($con,$q);



$datos = mysqli_fetch_array($qe);



	$arraydatos = array();
  $arraydatos['nombreproveedor'] = $datos['nombreproveedor'];
  $arraydatos['documento'] = $datos['documento'];
  $arraydatos['email'] = $datos['email'];
  $arraydatos['sector'] = $datos['sector'];
  $arraydatos['provincia'] = $datos['provincia'];
  $arraydatos['direccion'] = $datos['direccion'];
  $arraydatos['codigopostal'] = $datos['codigopostal'];
  $arraydatos['sitioweb'] = $datos['sitioweb'];
    $arraydatos['pais'] = $datos['pais'];

  $arraydatos['tipodocumento'] = $datos['tipodocumento'];

  $arraydatos['balance'] = $datos['balance'];
  $arraydatos['catalogocredito'] = $datos['catalogocredito'];
  $arraydatos['codigoasig'] = $datos['codigoasig'];
  $arraydatos['inicioncf'] = $datos['inicioncf'];
  $arraydatos['tipoproveedor'] = $datos['tipoproveedor'];
    $arraydatos['condicion'] = $datos['condicion'];
  $arraydatos['comision'] = $datos['comision'];
  $arraydatos['limite'] = $datos['limite'];
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 



 ?>