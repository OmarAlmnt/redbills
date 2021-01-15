<?php 	


include "conexion.php";


$cuentacc = $_POST['cuentacc'];

$q = "UPDATE cuentascontables set activo = 'no' WHERE cuenta = '".$cuentacc."'";


$eq = mysqli_query($con,$q);

















?>