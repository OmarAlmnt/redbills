<?php 	
include "conexion.php";

$idtel = $_POST['idtel'];





mysqli_query($con, "DELETE FROM telefonocliente WHERE idtelefono ='".$idtel."'");
//mysqli_commit($con);

 ?>