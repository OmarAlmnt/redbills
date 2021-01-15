<?php 
include "conexion.php";
$nombre = $_POST["nombrepuesto"];
$estado = $_POST["estadopuesto"];


$q = "INSERT INTO puesto VALUES(0,'".$nombre."','".$estado."',CURRENT_DATE)";


$qe = mysqli_query($con,$q);



echo mysqli_error($con);


 ?>