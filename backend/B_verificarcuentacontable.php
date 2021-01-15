<?php 


include 'conexion.php';
$cuentacc = $_POST['cuentacc2'];



$q = "SELECT nombre from cuentascontables WHERE cuenta = '".$cuentacc."'";

$qe = mysqli_query($con,$q);


$existe = mysqli_num_rows($qe);


if ($existe > 0) {

	$dato = mysqli_fetch_array($qe);
	echo $dato["nombre"];
}else{

echo "No existe";

}
 ?>
