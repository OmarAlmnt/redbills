<?php

include "conexion.php"; 
$filename = "some-filename";
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");
header("Pragma: no-cache");
header("Expires: 0");




?>

        <table class="table table-sm data"  id="tablacc2" >
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Origen</th>
      <th scope="col">Tipo</th>
      <th scope="col">Grupo</th>
      <th scope="col">Descarga</th>
    </tr>
  </thead>
  <tbody id="divfiltrartablacc2">
<?php 

      $queryllenarcc2 = "SELECT cuenta,nombre,origen,tipo,grupo,descargo FROM cuentascontables WHERE activo =  'si';";
      $equeryllenarcc2 = mysqli_query($con,$queryllenarcc2);
      while ($datoscc2 = mysqli_fetch_array($equeryllenarcc2)) {


                echo'<tr cuenta="'.$datoscc2["cuenta"].'" nombre="'.$datoscc2["nombre"].'" class="subrayarrow trtablacc2">';
                echo'<th scope="row">'.$datoscc2["cuenta"].'</th>';
                echo'<td>'.$datoscc2["nombre"].'</td>';
                echo'<td>'.$datoscc2["origen"].'</td>';
                echo'<td>'.$datoscc2["grupo"].'</td>';
                echo'<td>'.$datoscc2["tipo"].'</td>';
                echo'<td>'.$datoscc2["descargo"].'</td>';
                echo'</tr>';

             }



 ?>
  </tbody>

</table>