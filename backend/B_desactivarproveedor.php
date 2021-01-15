<?php 	


include "conexion.php";


$idp = $_POST['idp'];

$q = "UPDATE proveedor set activo = 'no' WHERE idproveedor = '".$idp."'";


$eq = mysqli_query($con,$q);

echo mysqli_error($con);















?>