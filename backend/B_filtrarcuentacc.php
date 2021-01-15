<?php 

$busquedacc2 = $_POST['busquedacc2'];

$estado = $_POST['estado'];

include "conexion.php";
$buq = "";
if ($estado != "todos") {

      $q = "SELECT cuenta,nombre,origen,tipo,grupo,descargo,activo FROM cuentascontables WHERE (cuenta LIKE '%".$busquedacc2."%' or nombre LIKE '%".$busquedacc2."%' or origen LIKE '%".$busquedacc2."%' or tipo LIKE '%".$busquedacc2."%' or grupo LIKE '%".$busquedacc2."%' or descargo LIKE '%".$busquedacc2."%') AND activo = '".$estado."';";
  }else{


$q = "SELECT cuenta,nombre,origen,tipo,grupo,descargo,activo FROM cuentascontables WHERE cuenta LIKE '%".$busquedacc2."%' or nombre LIKE '%".$busquedacc2."%' or origen LIKE '%".$busquedacc2."%' or tipo LIKE '%".$busquedacc2."%' or grupo LIKE '%".$busquedacc2."%' or descargo LIKE '%".$busquedacc2."%';";


  }
      $eq = mysqli_query($con,$q);

      while ($datoscc3 = mysqli_fetch_array($eq)) {







            if ($datoscc3["activo"] == "si") {

      			$buq .= '
   
   <tr class="tr-shadow">
                                                <td>
                                                    
                                                </td>
                                                <td>'.$datoscc3["cuenta"].'</td>
                                                <td>
                                                    <span class="block-email">'.$datoscc3["nombre"].'</span>
                                                </td>
                                                <td class="desc">'.$datoscc3["origen"].'</td>
                                               
                                                <td>
                                                    <span class="status--process">'.$datoscc3["tipo"].'</span>
                                                </td>

                                                <td>
                                                    <span class="status--process">'.$datoscc3["grupo"].'</span>
                                                </td>
                                             

                                                <td>
                                                    <span class="status--process">'.$datoscc3["descargo"].'</span>
                                                </td>                                               

                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <div class="tooltipa">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        <span class="tooltiptexta">Editar</span></button></div>
                                                        <div class="tooltipa">
                                                        <button class="item desactivarcuentacc"  cuenta="'.$datoscc3["cuenta"].'" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                            <span class="tooltiptexta">Desactivar</span>
                                                        </button></div>

                                                    </div>
                                                </td>
                                            </tr>';


            }elseif ($datoscc3["activo"] == "no") {

                                $buq .= '
   
   <tr class="tr-shadow">
                                                <td>
                                                    
                                                </td>
                                                <td>'.$datoscc3["cuenta"].'</td>
                                                <td>
                                                    <span class="block-email">'.$datoscc3["nombre"].'</span>
                                                </td>
                                                <td class="desc">'.$datoscc3["origen"].'</td>
                                               
                                                <td>
                                                    <span class="status--process">'.$datoscc3["tipo"].'</span>
                                                </td>

                                                <td>
                                                    <span class="status--process">'.$datoscc3["grupo"].'</span>
                                                </td>
                                             

                                                <td>
                                                    <span class="status--process">'.$datoscc3["descargo"].'</span>
                                                </td>                                               

                                                <td>

                                                   <div class="table-data-feature">
                                                   <div class="tooltipa">
                                                   <button class="item reactivarcuentacc"  cuenta="'.$datoscc3["cuenta"].'" data-placement="top" title="Reactivar">
                                                   <i class="zmdi zmdi-check"></i></i>
                                                   <span class="tooltiptexta">Reactivar</span>
                                                   </button></div>
                                                </td>
                                            </tr>';


            }

        }








	$arraydatos = array();
	$arraydatos['tblcc2'] = $buq;
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 

 ?>