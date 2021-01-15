<?php 	


include "conexion.php";


$idcliente = $_POST['idclient'];

$q = "UPDATE cliente set activo = 'si' WHERE idcliente = '".$idcliente."'";


$eq = mysqli_query($con,$q);

















?>