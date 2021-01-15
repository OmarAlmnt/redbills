<?php 

$busquedacc2 = $_POST['busquedacc2'];


include "conexion.php";
$buq = "";

      $q = "SELECT cuenta,nombre,origen,tipo,grupo,descargo FROM cuentascontables WHERE cuenta LIKE '%".$busquedacc2."%' or nombre LIKE '%".$busquedacc2."%' or origen LIKE '%".$busquedacc2."%' or tipo LIKE '%".$busquedacc2."%' or grupo LIKE '%".$busquedacc2."%' or descargo LIKE '%".$busquedacc2."%';";
      $eq = mysqli_query($con,$q);

      while ($datoscc2 = mysqli_fetch_array($eq)) {

      			$buq .= '
                <tr cuenta="'.$datoscc2["cuenta"].'" nombre="'.$datoscc2["nombre"].'" class="subrayarrow trtablacc2">
                <th scope="row">'.$datoscc2["cuenta"].'</th>
                <td>'.$datoscc2["nombre"].'</td>
                <td>'.$datoscc2["origen"].'</td>
                <td>'.$datoscc2["grupo"].'</td>
                <td>'.$datoscc2["tipo"].'</td>
                <td>'.$datoscc2["descargo"].'</td>
                </tr>';

             }








	$arraydatos = array();
	$arraydatos['tblcc2'] = $buq;
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 

 ?>