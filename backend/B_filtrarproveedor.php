<?php 

include "conexion.php";
$busqueda = $_POST['busqueda'];
$estado = $_POST['estado'];
$intervalo = $_POST['intervalo'];

function FormatPhone($phone)
{
        $phone = str_replace(" ", "", $phone);
        return substr($phone, 0, 5) . "" . substr($phone, 5);
}

$clientes = "";
if ($intervalo == "6meses") {

  if ($estado != "todos") {
           $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND p.activo = '".$estado."') AND (p.fecharegistro BETWEEN date_sub(now(), interval 6 month) AND NOW())";

        }else{

          $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (t.importancia = 'principal') AND (p.fecharegistro BETWEEN date_sub(now(), interval 6 month) AND NOW())";


        }
  
}elseif ($intervalo == "1year") {
  if ($estado != "todos") {
           $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND p.activo = '".$estado."') AND (p.fecharegistro BETWEEN date_sub(now(), interval 12 month) AND NOW())";


        }else{

         $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (t.importancia = 'principal') AND (p.fecharegistro BETWEEN date_sub(now(), interval 12 month) AND NOW())";


        }
}
elseif ($intervalo == "hoy") {
  if ($estado != "todos") {
           $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%'  OR p.pais LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND p.activo = '".$estado."') AND (p.fecharegistro BETWEEN date_sub(now(), interval 1 day) AND NOW())";

        }else{

         $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (t.importancia = 'principal') AND (p.fecharegistro BETWEEN date_sub(now(), interval 1 day) AND NOW())";



        }
}else{
  if ($estado != "todos") {
            $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%'   OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND p.activo = '".$estado."')";

        }else{

               $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono,p.activo FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE (p.idproveedor LIKE '%".$busqueda."%' OR p.nombreproveedor LIKE '%".$busqueda."%' OR p.pais LIKE '%".$busqueda."%' OR p.email LIKE '%".$busqueda."%' OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (t.importancia = 'principal')";


        }
        
}
$qe = mysqli_query($con,$q);

echo mysqli_error($con);
while ($datos = mysqli_fetch_array($qe)) {
	if ($datos["activo"] == "si") {
      $clientes .= '


 <tr class="tr-shadow">
                          
                                                <td>'.$datos["idproveedor"].'</td>
                                
                                                <td class="desc">'.$datos["nombreproveedor"].'</td>
                                                <td>'.$datos["pais"].'</td>
                                                                <td>
                                                    <span class="block-email">'.$datos["email"].'</span>
                                                </td>
                                                                                         <td>'.FormatPhone($datos["telefono"]).'</td>

                                               <td>
                                                    <div class="table-data-feature">

                                                        <div class="tooltipa">
                                                        <button class="item actualizarproveedor"  idp="'.$datos["idproveedor"].'" data-placement="top" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                        <span class="tooltiptexta">Editar</span></button></div>


                                                        <div class="tooltipa">
                                                        <button class="item desactivarproveedor"  idp="'.$datos["idproveedor"].'" data-placement="top" >
                                                            <i class="zmdi zmdi-delete"></i>
                                                        <span class="tooltiptexta">Desactivar</span></button></div>

                                                    </div>
                                                </td>
                                            </tr>






  ';

  }elseif ($datos["activo"] == "no") {
          $clientes .= '
 <tr class="tr-shadow">

                          
                                                <td>'.$datos["idproveedor"].'</td>
                                
                                                <td class="desc">'.$datos["nombreproveedor"].'</td>
                                                <td>'.$datos["pais"].'</td>
                                                                <td>
                                                    <span class="block-email">'.$datos["email"].'</span>
                                                </td>
                                                                                         <td>'.FormatPhone($datos["telefono"]).'</td>

                                               <td>

                                                   <div class="table-data-feature">
                                                   <div class="tooltipa">
                                                   <button class="item reactivarproveedor"  idp="'.$datos["idproveedor"].'" data-placement="top" title="Reactivar">
                                                   <i class="zmdi zmdi-check"></i></i>
                                                   <span class="tooltiptexta">Reactivar</span>
                                                   </button></div>


                                                   </div>
                                                   </td>
                                                   </tr>



  ';
  }


}


	$arraydatos = array();
	$arraydatos['clientes'] = $clientes;
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 


?>