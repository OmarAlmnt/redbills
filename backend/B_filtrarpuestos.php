<?php 

$busqueda = $_POST['busqueda'];

$estado = $_POST['estado'];

include "conexion.php";
$buq = "";
if ($estado != "todos") {

      $q = "SELECT idpuesto,puesto,estado,fecha_registro FROM puesto WHERE (idpuesto LIKE '%".$busqueda."%' or puesto LIKE '%".$busqueda."%' or estado LIKE '%".$busqueda."%' or fecha_registro LIKE '%".$busqueda."%') AND estado = '".$estado."';";
  }else{



      $q = "SELECT idpuesto,puesto,estado,fecha_registro FROM puesto WHERE idpuesto LIKE '%".$busqueda."%' or puesto LIKE '%".$busqueda."%' or estado LIKE '%".$busqueda."%' or fecha_registro LIKE '%".$busqueda."%';";

  }
      $eq = mysqli_query($con,$q);

      while ($datoscc3 = mysqli_fetch_array($eq)) {







            if ($datoscc3["estado"] == "Activo") {

 
                                $buq .= '
   
   <tr class="tr-shadow">
                                           
                                                <td>'.$datoscc3["idpuesto"].'</td>
                                                <td class="desc">
                                                    '.$datoscc3["puesto"].'
                                                </td>
                                               
                                                <td>
                                                    <span class="block-email" style="color: green;">'.$datoscc3["estado"].'</span>
                                                </td>

                                                                             
 
                                                <td>
                                                    <span class="status--process">'.$datoscc3["fecha_registro"].'</span>
                                                </td>

                                                <td>


                                                   <div class="table-data-feature">
                                                        
                                                        <div class="tooltipa">
                                                        <button class="item"  data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            <span class="tooltiptexta">Editar</span>
                                                        </button></div>
                                                        <div class="tooltipa">
                                                        <button class="item desactivarpuesto"  puesto="'.$datoscc3["idpuesto"].'" data-placement="top" title="Desactivar Puesto">
                                                            <i class="zmdi zmdi-delete"></i>
                                                            <span class="tooltiptexta">Desactivar</span>
                                                        </button></div>
                                                </td>
                                            </tr>';



            }elseif ($datoscc3["estado"] == "Inactivo") {

                                $buq .= '
   
   <tr class="tr-shadow">
                                           
                                                <td>'.$datoscc3["idpuesto"].'</td>
                                                <td class="desc">
                                                    '.$datoscc3["puesto"].'
                                                </td>
                                               
                                                <td>
                                                    <span class="block-email" style="color: red;">'.$datoscc3["estado"].'</span>
                                                </td>

                                                                             
 
                                                <td>
                                                    <span class="status--process">'.$datoscc3["fecha_registro"].'</span>
                                                </td>

                                                <td>

                                                   <div class="table-data-feature">
                                                   <div class="tooltipa">
                                                   <button class="item reactivarpuesto"  puesto="'.$datoscc3["idpuesto"].'" data-placement="top" title="Reactivar">
                                                   <i class="zmdi zmdi-check"></i></i>
                                                   <span class="tooltiptexta">Reactivar</span>
                                                   </button></div>
                                                </td>
                                            </tr>';



            }

        }








	$arraydatos = array();
	$arraydatos['tblpuestos'] = $buq;
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 

 ?>