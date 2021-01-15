<?php 

include "conexion.php";
$busqueda = $_POST['busqueda'];
$estado = $_POST['estado'];

function FormatPhone($phone)
{
        $phone = str_replace(" ", "", $phone);
        return substr($phone, 0, 5) . "" . substr($phone, 5);
}

$clientes = "";

if ($estado != "todos") {
   $q = "SELECT c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal' AND c.activo = '".$estado."')";

}else{

  $q = "SELECT c.idcliente,c.nombrecliente,c.documento,c.email,c.sector,c.provincia,t.telefono FROM cliente c JOIN telefonocliente t ON c.idcliente = t.idcliente WHERE (c.idcliente LIKE '%".$busqueda."%' OR c.nombrecliente LIKE '%".$busqueda."%' OR c.documento LIKE '%".$busqueda."%' OR c.email LIKE '%".$busqueda."%' OR c.sector LIKE '%".$busqueda."%' OR c.provincia LIKE '%".$busqueda."%'  OR t.telefono LIKE '%".$busqueda."%') AND (t.importancia = 'principal')";


}
$qe = mysqli_query($con,$q);

while ($datos = mysqli_fetch_array($qe)) {
	

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
                                                   <button class="item" data-toggle="tooltip" idcli="'.$datos["idcliente"].'" data-placement="top" title="Ver perfil">
                                                   <i class="zmdi zmdi-eye"></i></i>
                                                   </button>
                                                   <button class="item" data-toggle="tooltip" idcli="'.$datos["idcliente"].'" data-placement="top" title="Edit">
                                                   <i class="zmdi zmdi-edit"></i>
                                                   </button>
                                                   <button class="item desactivarcliente" idcli="'.$datos["idcliente"].'" data-toggle="tooltip" data-placement="top" title="Desactivar">
                                                   <i class="zmdi zmdi-delete"></i>
                                                   </button>

                                                   </div>
                                                   </td>
                                                   </tr>



	';
}


	$arraydatos = array();
	$arraydatos['clientes'] = $clientes;
	echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 


?>