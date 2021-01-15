<?php 


include 'conexion.php';
$idcli = $_POST['idcli'];

$telefono = $_POST['telf'];
$tipotelefono = $_POST['tipotel'];

$q = "INSERT INTO telefonocliente(telefono,tipotelefono,idcliente) VALUES ('".$telefono."','".$tipotelefono."','".$idcli."')";

$qe = mysqli_query($con,$q);

echo mysqli_error($con);

 ?>