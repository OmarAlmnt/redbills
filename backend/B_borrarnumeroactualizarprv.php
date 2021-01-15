<?php 	
include "conexion.php";

$idtel = $_POST['idtelp'];





mysqli_query($con, "DELETE FROM telefonoproveedor WHERE idtelefono ='".$idtel."'");
//mysqli_commit($con);

echo mysqli_error($con);

 ?>