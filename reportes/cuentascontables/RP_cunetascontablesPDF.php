
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

	   <tr>
	      <th scope="row">1</th>
	     <td>'.$datos["idcliente"].'</td>
	      <td>'.$datos["documento"].'</td>
	      <td>'.$datos["email"].'</td>
	      <td>'.$datos["telefono"].'</td>
	      <td>'.$datos["sector"].'</td>
	      <td>'.$datos["provincia"].'</td>
	    </tr>


  




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
