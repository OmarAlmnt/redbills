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
           $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND c.activo = '".$estado."') AND (c.fecharegistro BETWEEN date_sub(now(), interval 6 month) AND NOW())";

        }else{

          $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (c.fecharegistro BETWEEN date_sub(now(), interval 6 month) AND NOW())";


        }
  
}elseif ($intervalo == "1year") {
  if ($estado != "todos") {
           $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND c.activo = '".$estado."') AND (c.fecharegistro BETWEEN date_sub(now(), interval 12 month) AND NOW())";

        }else{

          $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (c.fecharegistro BETWEEN date_sub(now(), interval 12 month) AND NOW())";


        }
}
elseif ($intervalo == "hoy") {
  if ($estado != "todos") {
           $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND c.activo = '".$estado."') AND (c.fecharegistro BETWEEN date_sub(now(), interval 1 day) AND NOW())";

        }else{

          $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') AND (c.fecharegistro BETWEEN date_sub(now(), interval 1 day) AND NOW())";


        }
}else{
  if ($estado != "todos") {
           $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND c.activo = '".$estado."')";

        }else{

          $q = "SELECT c.activo,c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal') ";


        }
        
}
$qe = mysqli_query($con,$q);

while ($datos = mysqli_fetch_array($qe)) {
	if ($datos["activo"] == "si") {
      $clientes .= '



                           <tr class="tr-shadow">
                                                   <td>'.$datos["idcliente"].'</td>
                                                   <td class="desc">'.$datos["nombrecliente"].'</td>
                                                   </td>
                                                   <span class="status--process"></span>

                                                   <td>'.$datos["documento"].'</td>
                                                   <td>
                                                   <span class="block-email">'.$datos["email"].'</span>

                                                   </td>
                                                   <td>'.FormatPhone($datos["telefono"]).'</td>
                                                   <td class="desc">'.$datos["sector"].'</td>
                                                   <td class="desc">'.$datos["provincia"].'</td>

                                                   <td>

                                                   
                                                   <div class="table-data-feature">
                                                   <div class="tooltipa"><button class="item btnvercliente" idcli="'.$datos["idcliente"].'" data-placement="top" >
                                                   <i class="zmdi zmdi-eye"></i></i>
                                                   <span class="tooltiptexta">Ver perfil</span></button></div>
                                                   <div class="tooltipa"><button class="item llenarmodalactualizarcliente"  idcli="'.$datos["idcliente"].'" data-placement="top"  data-toggle="modal" data-target="#modalactualizarcliente">
                                                    <i class="zmdi zmdi-edit"></i>
                                                   <span class="tooltiptexta">Editar</span></button></div>
                                                   <div class="tooltipa"><button class="item desactivarcliente" idcli="'.$datos["idcliente"].'"  data-placement="top" >
                                                   <i class="zmdi zmdi-delete"></i>
                                                   <span class="tooltiptexta">Desactivar</span></button></div>
                                                   </div>
                                                   </td>
                                                   </tr>



  ';

  }elseif ($datos["activo"] == "no") {
          $clientes .= '



                           <tr class="tr-shadow">
                                                   <td>'.$datos["idcliente"].'</td>
                                                   <td class="desc">'.$datos["nombrecliente"].'</td>
                                                   </td>
                                                   <span class="status--process"></span>

                                                   <td>'.$datos["documento"].'</td>
                                                   <td>
                                                   <span class="block-email">'.$datos["email"].'</span>

                                                   </td>
                                                   <td>'.FormatPhone($datos["telefono"]).'</td>
                                                   <td class="desc">'.$datos["sector"].'</td>
                                                   <td class="desc">'.$datos["provincia"].'</td>

                                                   <td>

                                                   <div class="table-data-feature">
                                                   <div class="tooltipa">
                                                   <button class="item reactivarcliente"  idcli="'.$datos["idcliente"].'" data-placement="top" title="Reactivar">
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