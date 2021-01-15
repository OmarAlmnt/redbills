<?php 


include 'conexion.php';
$idprv = $_POST['idcli'];

$telefono = $_POST['telf'];
$tipotelefono = $_POST['tipotel'];

$q = "INSERT INTO telefonoproveedor(telefono,tipotelefono,idproveedor) VALUES ('".$telefono."','".$tipotelefono."','".$idprv."')";

$qe = mysqli_query($con,$q);

echo mysqli_error($con);

 ?>