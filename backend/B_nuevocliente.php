
 <?php 


include 'conexion.php';

try {
	$nombrecliente = $_POST['nombrecliente'];
$documento = $_POST['documento'];
$tipodocumento = $_POST['tipodocumento'];
$pais = $_POST['pais'];
$provincia = $_POST['provincia'];
$sector = $_POST['sector'];
$direccion = $_POST['direccion'];
$codigopostal = $_POST['codigopostal'];
$sitioweb = $_POST['sitioweb'];

$tipocomprobante = $_POST['tipocomprobante'];
$idvendedor = $_POST['idvendedor'];
$terminodepago = $_POST['terminodepago'];
$listadeprecio = $_POST['listadeprecio'];
	$email = $_POST['email'];
$tel = $_POST['telefono'];
$tipotel = $_POST['tipotelefono'];

	$usuariocliente = $_POST['usuariocliente'];
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             




$q = "INSERT INTO cliente(nombrecliente,documento,tipodocumento,pais,provincia,sector,direccion,codigopostal,sitioweb,email,usuariocliente,passwordcliente,tipocomprobante,idvendedor,terminodepago,listadeprecio) VALUES ('".$nombrecliente."','".$documento."','".$tipodocumento."','".$pais."','".$provincia."','".$sector."','".$direccion."','".$codigopostal."','".$sitioweb."','".$email."','".$usuariocliente."','".$passwordcliente."','".$tipocomprobante."','".$idvendedor."','".$terminodepago."','".$listadeprecio."')";

$eq = mysqli_query($con,$q);

$idcl = mysqli_insert_id($con);


$qt = "INSERT INTO telefonocliente (telefono,idcliente,importancia) VALUES ('".$tel."','".$idcl."','principal')";
$eqt = mysqli_query($con,$qt);

echo mysqli_error($con);
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



echo $idcl;




 ?>