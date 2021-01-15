<?php       

require_once '../pdf/pdf/vendor/autoload.php';
use Dompdf\Dompdf;



ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Listadeclientes</title>
  <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body>




   
<div style="
    
    padding-right: 0%;
    
    padding-left: 0%;
">
<img src="../../img/logos/sistema3.png" width="220px">
  <h3>Lista de clientes</h3>
<table class="table table-borderless table-sm rounded">
  <thead>
    <tr style="background: #7cbd1e;">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cédula/RNC</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Sector</th>
      <th scope="col">Provincia</th>      
    </tr>
  </thead>
  <tbody style="
  background: rgba(188,235,60,0.3);

  ">
  <?php 


include "../../backend/conexion.php";
$busqueda = $_REQUEST['b'];
$estado = $_REQUEST['e'];
$intervalo = $_REQUEST['i'];

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

	   echo'<tr>';
	      echo'<th scope="row">'.$datos["idcliente"].'</th>';
	      echo'<td>'.$datos["nombrecliente"].'</td>';
	      echo'<td>'.$datos["documento"].'</td>';
	      echo'<td>'.$datos["email"].'</td>';
	      echo'<td>'.$datos["telefono"].'</td>';
	      echo'<td>'.$datos["sector"].'</td>';
	      echo'<td>'.$datos["provincia"].'</td>';
	    echo'</tr>';



  



}

 ?>

  </tbody>
</table>
</div>
<br>
<br>
 <div class="row" style="text-align: center;"> 
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Hunterbill. Todos los derechos reservados. Diseñado por <a href="https://www.instagram.com/redwebsdr/?hl=es-la">RedWebs</a>.</p>
                                </div>
                            </div>
                        </div>
</body>
</html>
<?php 



        $html = ob_get_clean();

      // instantiate and use the dompdf class
      $dompdf = new Dompdf();

      $dompdf->loadHtml($html);
      // (Optional) Setup the paper size and orientation
      $dompdf->setPaper('letter', 'portrait');
      // Render the HTML as PDF
      $dompdf->render();
      // Output the generated PDF to Browser
      ob_get_clean();
      $dompdf->stream('listadeclientes.pdf',array('Attachment'=>0));
      exit;      

   ?>