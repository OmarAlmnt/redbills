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
    <title>Catalogo de cuentas - HunterBill</title>

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

<body class="animsition">
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
    <div class="page-wrapper">
      
      <?php
include 'navbar.php';
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
<div class="row">
                            <h1 class="title-5 m-b-35" style="padding-left: 15px">Lista de Cuentas Contables</h1>
                            <div class="col-md-12">


<!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Tabla de datos</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="activocc js-select2" name="property">
                                                <option value="si" selected="selected">Activas</option>
                                                <option  value="no">Inactivas</option>
                                                <option  value="todos">Todas</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                     
                                        <input class="au-input busquedacuentacc" type="text" placeholder="Buscar">
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                       <a href="VW_nuevacuentacontable.php">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">

                                            <i class="zmdi zmdi-plus"></i>Agregar Cuenta</button>
                                             </a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Exportar</option>
                                                <option value="">PDF</option>
                                                <option value="">Excel</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                  
                                                </th>
                                                <th>Cuenta</th>
                                                <th>Nombre</th>
                                                <th>Origen</th>
                                                <th>Tipo</th>
                                                <th>Grupo</th>
                                                <th>Descargo</th>
                                                <th>Acciones</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="divfiltrartablacc">
                                            <?php 

      $queryllenarcc3 = "SELECT cuenta,nombre,origen,tipo,grupo,descargo,activo FROM cuentascontables WHERE activo =  'si';";
      $equeryllenarcc3 = mysqli_query($con,$queryllenarcc3);
      while ($datoscc3 = mysqli_fetch_array($equeryllenarcc3)) {
                                                  if ($datoscc3["activo"] == "si") {

   
   echo'<tr class="tr-shadow">';
                                                echo'<td>';
                                                    
                                                echo'</td>';
                                                echo'<td>'.$datoscc3["cuenta"].'</td>';
                                                echo'<td>';
                                                    echo'<span class="block-email">'.$datoscc3["nombre"].'</span>';
                                                echo'</td>';
                                                echo'<td class="desc">'.$datoscc3["origen"].'</td>';
                                               
                                                echo'<td>';
                                                    echo'<span class="status--process">'.$datoscc3["tipo"].'</span>';
                                                echo'</td>';

                                                echo'<td>';
                                                    echo'<span class="status--process">'.$datoscc3["grupo"].'</span>';
                                                echo'</td>';
                                             

                                                echo'<td>';
                                                    echo'<span class="status--process">'.$datoscc3["descargo"].'</span>';
                                                echo'</td>  ';                                             

                                                echo'<td>';
                                                    echo'<div class="table-data-feature">';
                                                        echo'<button class="item" data-toggle="tooltip" data-placement="top" title="Send">';
                                                            echo'<i class="zmdi zmdi-mail-send"></i>';
                                                        echo'</button>';
                                                        echo'<div class="tooltipa"><button class="item togglemodaleditarcuentascontables" cuenta="'.$datoscc3["cuenta"].'" data-placement="top" title="Edit">';
                                                            echo'<i class="zmdi zmdi-edit"></i>';
                                                        echo'<span class="tooltiptexta">Editar</span></button></div>';
                                                        echo'<div class="tooltipa"><button class="item desactivarcuentacc"  cuenta="'.$datoscc3["cuenta"].'" data-placement="top" title="Delete">';
                                                            echo'<i class="zmdi zmdi-delete"></i>';
                                                        echo'<span class="tooltiptexta">Desactivar</span></button></div>';
                                                        echo'<button class="item" data-toggle="tooltip" data-placement="top" title="More">';
                                                            echo'<i class="zmdi zmdi-more"></i>';
                                                        echo'</button>';
                                                    echo'</div>';
                                                echo'</td>';
                                            echo'</tr>';


            }elseif ($datoscc3["activo"] == "no") {

   
   echo'<tr class="tr-shadow">';
                                                echo'<td>';
                                                    
                                                echo'</td>';
                                                echo'<td>'.$datoscc3["cuenta"].'</td>';
                                                echo'<td>';
                                                    echo'<span class="block-email">'.$datoscc3["nombre"].'</span>';
                                                echo'</td>';
                                                echo'<td class="desc">'.$datoscc3["origen"].'</td>';
                                               
                                                echo'<td>';
                                                   echo' <span class="status--process">'.$datoscc3["tipo"].'</span>';
                                                echo'</td>';

                                                echo'<td>';
                                                   echo' <span class="status--process">'.$datoscc3["grupo"].'</span>';
                                                echo'</td>';
                                             

                                                echo'<td>
                                                    <span class="status--process">'.$datoscc3["descargo"].'</span>';
                                                echo'</td> ';                                              

                                                echo'<td>';

                                                   echo'<div class="table-data-feature">';
                                                   echo'<div class="tooltipa">';
                                                   echo'<button class="item reactivarcuentacc"  cuenta="'.$datoscc3["cuenta"].'" data-placement="top" title="Reactivar">';
                                                   echo'<i class="zmdi zmdi-check"></i></i>';
                                                   echo'<span class="tooltiptexta">Reactivar</span>';
                                                   echo'</button></div>';
                                                echo'</td>';
                                            echo'</tr>';


            }

             }



 ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->


</div>
</div>







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
