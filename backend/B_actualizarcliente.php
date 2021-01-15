<?php 


include 'conexion.php';

try {
	$nombrecliente = $_POST['a_nombrecliente'];
$documento = $_POST['a_documento'];
$tipodocumento = $_POST['a_tipodocumento'];
$pais = $_POST['a_pais'];
$provincia = $_POST['a_provincia'];
$sector = $_POST['a_sector'];
$direccion = $_POST['a_direccion'];
$codigopostal = $_POST['a_codigopostal'];
$sitioweb = $_POST['a_sitioweb'];
$telefono = $_POST['a_telefonop'];


$tipocomprobante = $_POST['a_tipocomprobante'];
$idvendedor = $_POST['a_idvendedor'];
$terminodepago = $_POST['a_terminodepago'];
$listadeprecio = $_POST['a_listadeprecio'];
	$email = $_POST['a_email'];

	$idcliente = $_POST['idclientee'];

	$usuariocliente = $_POST['a_usuariocliente'];

	$passwordcliente = $_POST['a_passwordcliente'];




$q = "UPDATE cliente SET nombrecliente = '".$nombrecliente."',documento = '".$documento."',tipodocumento = '".$tipodocumento."',pais = '".$pais."',provincia = '".$provincia."',sector ='".$sector."',direccion = '".$direccion."',codigopostal = '".$codigopostal."',sitioweb = '".$sitioweb."',email = '".$email."', usuariocliente = '".$usuariocliente."',passwordcliente = '".$passwordcliente."',tipocomprobante = '".$tipocomprobante."', idvendedor = '".$idvendedor."',terminodepago = '".$terminodepago."',listadeprecio = '".$listadeprecio."' WHERE idcliente ='".$idcliente."'";



$eq = mysqli_query($con,$q);

$q2 = "UPDATE telefonocliente set telefono = '".$telefono."' WHERE idcliente ='".$idcliente."' AND importancia = 'principal'";
$eq2 = mysqli_query($con,$q2);
echo mysqli_error($con);
mysqli_commit($con);


//$idcli = mysqli_insert_id($con);

   // $qtl = "INSERT INTO telefonocliente (telefono,tipotelefono,importancia,idcliente) VALUES ('".$_POST['telefono']."','".$_POST['tipotelefono']."','principal','".$idcli."')";
   // $eqtl = mysqli_query($con,$qtl);

//    echo $idcli;

//$listadetelefonos = $_POST['listadetelefonos'];

//$listaespecifica = explode(',', $listadetelefonos);



//	foreach ($listaespecifica as $valor) {

//	if ($valor > 0) {
//		 $tel = $_POST['te'.$valor];
//
  //  $qt = "INSERT INTO telefonocliente (telefono,idcliente) VALUES ('".$tel."','".$idcli."')";

    //$eqt = mysqli_query($con,$qt);

	//}
   
//}

} catch (Exception $e) {


	
}








 ?>