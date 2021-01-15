<?php 	


include "conexion.php";


$idcliente = $_POST['idclient'];

$q = "UPDATE cliente set activo = 'no' WHERE idcliente = '".$idcliente."'";


$eq = mysqli_query($con,$q);

















?>