<?php 

include "conexion.php";
$clienteid = $_POST['clienteid'];

function FormatPhone($phone)
{
        $phone = str_replace(" ", "", $phone);
        return substr($phone, 0, 5) . "" . substr($phone, 5);
}

$telefonos = "";

$q = "SELECT c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,c.direccion,c.codigopostal,c.sitioweb,c.passwordcliente,c.usuariocliente,c.tipocomprobante,c.idvendedor,c.terminodepago,c.listadeprecio FROM cliente c WHERE c.idcliente ='".$clienteid."'";
$qe = mysqli_query($con,$q);



$clienteeid ='<input type="hidden" id="idcl" name="" value="'.$clienteid.'" required placeholder="+1 (999) 999 9999" class="form-control idcliente">';
$datos = mysqli_fetch_array($qe);



	$arraydatos = array();
	$arraydatos['idcliente'] = $datos['idcliente'];
  $arraydatos['nombrecliente'] = $datos['nombrecliente'];
  $arraydatos['documento'] = $datos['documento'];
  $arraydatos['email'] = $datos['email'];
  $arraydatos['sector'] = $datos['sector'];
  $arraydatos['provincia'] = $datos['provincia'];
  $arraydatos['direccion'] = $datos['direccion'];
  $arraydatos['codigopostal'] = $datos['codigopostal'];
  $arraydatos['sitioweb'] = $datos['sitioweb'];
  $arraydatos['passwordcliente'] = $datos['passwordcliente'];
  $arraydatos['usuariocliente'] = $datos['usuariocliente'];
  $arraydatos['tipocomprobante'] = $datos['tipocomprobante'];
  $arraydatos['idvendedor'] = $datos['idvendedor'];
  $arraydatos['terminodepago'] = $datos['terminodepago'];
  $arraydatos['listadeprecio'] = $datos['listadeprecio'];
  $arraydatos['clienteeid'] = $clienteeid;

	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 


?>