<?php 


include 'conexion.php';
$idcli = $_POST['idcli'];

$telefono = $_POST['telfp'];
$tipotelefono = $_POST['tipotel'];

$q = "INSERT INTO telefonoproveedor(telefono,tipotelefono,idproveedor) VALUES ('".$telefono."','".$tipotelefono."','".$idcli."')";

$qe = mysqli_query($con,$q);

echo mysqli_error($con);

 ?>