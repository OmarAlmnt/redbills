<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Catalogo de cuentas</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
  
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
        <link href="vendor/fontawesome/all.min.css" rel="stylesheet" >
<script type="text/javascript" src="vendor/fontawesome/all.min.js"></script>
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


</head>
 <style type="text/css">
        .tooltipa {
  position: relative;
  display: inline-block;
  margin-right: 5px;
}

.tooltipa .tooltiptexta {
    
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltipa .tooltiptexta::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltipa:hover .tooltiptexta {
  visibility: visible;
  opacity: 1;
}
    </style>
<body class="animsition">
    
    <div class="page-wrapper">
      
      <?php
      include 'modallistap.php';

include 'navbar.php';
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    






 <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Lista de proveedores</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                      <select class="js-select2" id="filtroestadop" name="property">
                                                <option selected="selected" value="si">Activos</option>
                                                <option value="no">Inactivos</option>
                                                <option  value="todos">Todos</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" id="filtrotiempop" name="time">
                                                <option value="hoy" >Hoy</option>
                                                <option value="6meses">6 Meses</option>
                                                <option value="1year">1 Año</option>
                                                <option value="cualquierdia" selected="selected">Siempre</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                              
                                    </div>
                                    <input class="au-input" id="buscarproveedor" type="text" placeholder="Buscar">
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Pais</th>
                                                <th>Correo</th>
                                                <th>Telefono</th>

                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="contenedorproveedor">


                                            <?php 
function FormatPhone($phone)
{
        $phone = str_replace(" ", "", $phone);
        return substr($phone, 0, 5) . "" . substr($phone, 5);
}

                                               $q = "SELECT p.idproveedor,p.nombreproveedor,p.pais,p.email,t.telefono FROM proveedor p JOIN telefonoproveedor t ON p.idproveedor = t.idproveedor WHERE t.importancia = 'principal' AND p.activo = 'si' ";

                                                $eq = mysqli_query($con,$q);

                                                
                                                while ($datos = mysqli_fetch_array($eq)) {



                             echo '<tr class="tr-shadow">';
                          
                                                echo '<td>'.$datos["idproveedor"].'</td>';
                                
                                                echo '<td class="desc">'.$datos["nombreproveedor"].'</td>';
                                                echo '<td>'.$datos["pais"].'</td>';
                                                                echo '<td>';
                                                    echo '<span class="block-email">'.$datos["email"].'</span>';
                                                echo '</td>';
                                                                                         echo '<td>'.FormatPhone($datos["telefono"]).'</td>';

                                               echo '<td>';
                                                    echo '<div class="table-data-feature">';

                                                        echo '<div class="tooltipa"><button class="item actualizarproveedor"  idp="'.$datos["idproveedor"].'" data-placement="top" >';
                                                            echo '<i class="zmdi zmdi-edit"></i>';
                                                        echo '<span class="tooltiptexta">Editar</span></button></div>';


                                                        echo '<div class="tooltipa"><button class="item desactivarproveedor"  idp="'.$datos["idproveedor"].'" data-placement="top">';
                                                            echo '<i class="zmdi zmdi-delete"></i>';
                                                        echo '<span class="tooltiptexta">Desactivar</span></button></div>';
                                                    echo '</div>';
                                                echo '</td>';
                                            echo '</tr>';




                                                }





                                             ?>
               
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                      







 

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    
<script src="vendor/jquery-3.2.1.min.js"></script>










    <?php 

    if (isset($_REQUEST["b"])) {

        echo '<input type="hidden" value="'.SED::decryption($_REQUEST["b"]).'" name="" id="busquedaget">';
  
echo "     <script type='text/javascript'>
         
         $(document).ready(function() {
                 busqueda = $('#busquedaget').val();

                  estado = $('#filtroestadop').val();
                  $('#contenedorproveedor').empty();
                intervalo = $('#filtrotiempop').val();


                   $.ajax({

                   url: './backend/B_filtrarproveedor.php',
                                                            type: 'POST',
                                                            async: true,
                                                            data: {intervalo:intervalo,busqueda:busqueda,estado:estado},
                                                          

                                                            success: function(response){
                                                              console.log(response);
                                                               var infoestado = JSON.parse(response);
                                                               $('#contenedorproveedor').append(infoestado.clientes).hide().show('slow');

                                                            

                                                            }, 

                                                            error: function(error) {
                                                                console.log(error);


                                                                }

                    });
                 
            });
     </script>";


    }

     ?>


<script src="js/sweetalert.js"></script>
<script type="text/javascript" src="js/dtables.js"></script>
<script type="text/javascript" src="js/jszip.js"></script>
<script type="text/javascript" src="js/pdfmake.js"></script>
<script type="text/javascript" src="js/vfsfonts.js"></script>
<script type="text/javascript" src="js/jsdtables.js"></script>
<script type="text/javascript" src="js/dtbuttons.js"></script>
<script type="text/javascript" src="js/dthtml.js"></script>
<script type="text/javascript" src="js/dtprint.js"></script>
<script src="js/funciones.js"></script>


    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
