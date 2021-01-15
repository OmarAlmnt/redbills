<?php 	


include "conexion.php";


$puesto = $_POST['puesto'];

$q = "UPDATE puesto set estado = 'Activo' WHERE idpuesto = '".$puesto."'";


$eq = mysqli_query($con,$q);

















?>