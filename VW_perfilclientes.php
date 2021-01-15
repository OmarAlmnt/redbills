<?php   
include 'backend/conexion.php';


?>

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
    <title>Redbills</title>

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
    <div class="page-wrapper">
<?php
include 'navbar.php';
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                   
                        
                        <div class="row">
                            <h1 class="title-5 m-b-35" style="padding-left: 15px">Perfil De Cliente</h1>
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                

<div class="card-header">
      <?php  

      $dec = SED::decryption($_REQUEST["ic"]);

                                                $q = "SELECT * FROM cliente WHERE idcliente = ".$dec; " ";

                                                $eq = mysqli_query($con,$q);

                                                
                                                while ($datos = mysqli_fetch_array($eq)) {
                                                    ?>
                                        <h4><?php echo $datos['nombrecliente']; ?></h4>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-tab">

                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                                     aria-selected="true">Resumen</a>
                                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                                     aria-selected="false">Facturas</a>
                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                                     aria-selected="false">Cotizaciones</a>
                                                     <a class="nav-item nav-link" id="custom-nav-sub-contact-tab" data-toggle="tab" href="#custom-nav-sub-contact" role="tab" aria-controls="custom-nav-sub-contact"
                                                     aria-selected="false">Sub-contactos</a>
                                                     <a class="nav-item nav-link" id="custom-nav-notes-tab" data-toggle="tab" href="#custom-nav-notes" role="tab" aria-controls="custom-nav-notes"
                                                     aria-selected="false">Notas</a>
                                                </div>
                                            </nav>


                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">

                                                    <div class="row">


                                                                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Información del cliente</strong></div>
                                    <div class="card-body">
                                              <?php  
                                                $q1 = "SELECT * FROM cliente WHERE idcliente = ".$dec; " ";

                                                $eq1 = mysqli_query($con,$q1);

                                                
                                                while ($datos1 = mysqli_fetch_array($eq1)) {
                                                    ?>
                                        <form action="" method="post" novalidate="novalidate">
                                            <hr>
                                            <tr>
                                            <td><strong>ID: </strong><?php echo $datos1['idcliente'];?></td>
                                            </tr>
                                            
                                            <br>

                                            <tr>
                                                <hr>
                                            <td><strong>Usuario: </strong><?php echo $datos1['usuariocliente']; ?></td>
                                            </tr>
                                            


                                           
                                            <hr>
                                                
                                                    <a href="#" id="send_access" target="_blank" class="btn btn-circle dark btn-outline btn-block"><button type="button" class="btn btn-outline-primary">Enviar acceso por
                                                        email </button></i>
                                                        </a>
                                                
                                            <table class="table table-responsive">
  <br>
  <tbody>
    <tr>
                                            <th>
                                                Nombre

                                            </th>
                                            <td><?php echo $datos1['nombrecliente']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>
                                                RNC
                                            </th>
                                            <td><?php echo $datos1['documento']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Teléfono  Principal (Móvil)
                                            </th>
                                            <?php  
                                                $q1x = "SELECT * FROM telefonocliente WHERE idcliente = ".$dec; " ";

                                                $eq1x = mysqli_query($con,$q1x);

                                                
                                                while ($datos1x = mysqli_fetch_array($eq1x)) {
                                                    ?>
                                            <td><?php echo $datos1x['telefono']; ?></td>
                                            <?php
                                        }
                                        ?>
                                        </tr>

                                        <tr>
                                            <th>
                                                Email

                                            </th>
                                            <td><?php echo $datos1['email']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Código postal

                                            </th>
                                            <td><?php echo $datos1['codigopostal']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Pagina Web

                                            </th>
                                            <td><?php echo $datos1['sitioweb']; ?></td>
                                        </tr>


                                        <tr>
                                            <th>Fecha en que fue registrado</th>
                                            <td><?php echo $datos1['fecharegistro']; ?></td>
                                        </tr>
                                                                                   
  </tbody>
</table>
<?php
}
?>
 <hr>
                                                
                                                    <a href="#" id="send_access" target="_blank" class="btn btn-circle dark btn-outline "><button type="button" class="btn btn-outline-primary">Modificar
                                                        cliente</button></i>
                                                        </a>

                                                         <hr>
                                                
                                                    <a href="#" id="send_access" target="_blank" class="btn btn-circle dark btn-outline "><button type="button" class="btn btn-outline-primary">Eliminar
                                                    cliente</button></i>
                                                        </a>





                                            
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Facturas</strong>
                                    </div>
                                    <a href="#" id="send_access" target="_blank" class="btn btn-circle dark btn-outline "><button type="button" class="btn btn-outline-primary">Crear Factura</button></i>
                                                        </a>

                                                        <table class="table table-responsive">
                                                <tbody><tr>
                                                    
                                                </tr>
                                                                                                <tr>
                                                    <th>Total en deuda</th>
                                                    <td>2,560.00 RD$ </td>
                                                </tr>
                                                <tr>
                                                    <th>Total pagado</th>
                                                    <td>0 </td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>1 </td>
                                                </tr>

                                            </tbody></table>
                                <br>
                                </div>

<div class="card">
                                    <div class="card-header">
                                        <strong>Cotizaciones</strong>
                                    </div>
                                    <a href="#" id="send_access" target="_blank" class="btn btn-circle dark btn-outline "><button type="button" class="btn btn-outline-primary">Crear
                                                            cotización</button></i>
                                                        </a>

                                                        <table class="table table-responsive">
                                                <tbody><tr>
                                                    
                                                </tr>
                                                                                                
                                                <tr>
                                                    <th>Total</th>
                                                    <td>1 </td>
                                                </tr>

                                            </tbody></table>
                                <br>
                                </div>
                                
</div>









                                


                                








</div>







                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                    <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3 table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Título</th>
                                                <th>Cliente</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                    <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3 table-responsive">
                                        <thead>
                                            <tr>
                                                  <th>Número</th>
                                                <th>Título</th>
                                                <th>Cliente</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-sub-contact" role="tabpanel" aria-labelledby="custom-nav-sub-contact-tab">
                                                    <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3 ">
                                        <thead>
                                            <tr>
                                                <th>Nombre(s)</th>
                                                <th>Apellido(s)</th>
                                                <th>Email</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                                                                
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-notes" role="tabpanel" aria-labelledby="custom-nav-notes-tab-tab">
                                                     <div class="">
                                <div class="card">
                                    <div class="card-header">Agregar notas</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <textarea style="background-color: #fff;
    border-radius: 4px;
    border: 1px solid #dcdcdc;
    color: #333;
    font-size: 16px;
    padding: 14px 16px 12px;
    width: 100%;" name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                                            </div>
                                        </form>
                                         <hr>
                                         <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3 table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Nota</th>
                                                <th>Fecha</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                
                                                <td class="process">Processed</td>
                                                <td>$999.00</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                </div>
                            </div>


                                                </div>

                                               


                                            </div>

                                        </div>
                                    </div>

                                <!-- END DATA TABLE -->
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
