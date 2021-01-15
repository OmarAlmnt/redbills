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

<body class="animsition">
    <div class="page-wrapper">
      
      <?php
include 'backend/conexion.php';
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    



 <div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Nueva Cuenta Contable</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form  enctype="multipart/form-data" class="form-horizontal formnuevacuentacontable">
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Num. de Cuenta</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input type="number" placeholder="buscar..." class="form-control is-invalid cc_cuenta"   aria-describedby="button-addon2" required="" min="1">
  <div class="input-group-btn">
                                                            <a href="" data-toggle="modal" data-target="#Cuentascontables" class="btn btn-primary">
                                                                <i class="fas fa-search"></i>
                                                            </a>
                                                        </div>
</div>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Nombre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" class="form-control is-invalid cc_nombre" placeholder="Nombre" required="">
                                                    
                                                </div>
                                            </div>
               
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Cuenta Control</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input type="number" placeholder="buscar..." class="form-control cc_descargo is-invalid"   aria-describedby="button-addon2" required="" min="1">
 <div class="input-group-btn">
                                                            <a href="" data-toggle="modal" data-target="#Cuentascontables2" class="btn btn-primary">
                                                                <i class="fas fa-search"></i>
                                                            </a></div>

</div>
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" class="form-control  cc_descargon"  disabled="">
                                                    
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Fuente</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    
                                                     <select class="form-control is-invalid cc_origen"  required=""><option  value="" selected="" disabled="">Seleccione</option>
    <option  value="debito">Debito</option>
    <option value="Credito">Credito</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Tipo de Cuenta</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control cc_tipo is-invalid" required=""><option  value="" selected="" disabled="">Seleccione</option>
    <option  value="control">Control</option>
    <option value="auxiliar">Auxiliar</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Grupo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <select class="form-control is-invalid cc_grupo"  required=""><option  value="" selected="" disabled="">Seleccione</option>
    <option  value="Ingresos">Ingresos</option>
    <option value="Activos">Activos</option>
    <option value="Pasivos">Pasivos</option>
    <option value="Capital">Capital</option>
    <option value="Gastos">Gastos</option>
    <option value="Costos">Costos</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Columna 606</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <select class="form-control cc_columna606">
                                                    <option  value="0" selected="" disabled="">Seleccione</option>
    <option  value="Impuesto Selectivo al Consumo">Impuesto Selectivo al Consumo</option>
    <option value="ISR Persibido en Compras">ISR Persibido en Compras</option>
    <option value="ITBIS Facturado">ITBIS Facturado</option>
    <option value="ITBIS Percibido en Compras">ITBIS Percibido en Compras</option>
    <option value="ITBIS Retenido">ITBIS Retenido</option>
    <option value="ITBIS Sujeto A proporcionalidad">ITBIS Sujeto A proporcionalidad</option>
    <option value="Monto Facturado en Bienes">Monto Facturado en Bienes</option>
    <option value="Monto Facturado en Cervicios">Monto Facturado en Cervicios</option>
    <option value="Monto Propina Legal">Monto Propina Legal</option>
    <option value="Monto Retencion Renta">Monto Retencion Renta</option>
    <option value="Ninguno">Ninguno</option>
    <option value="Otros Impuestos/Tasas">Otros Impuestos/Tasas</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Retencion ISR</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control cc_retencionisr">
                                                        <option  value="0" selected="" disabled="">Seleccione</option>
    <option  value="Alquileres">Alquileres</option>
    <option value="Orarios por Servicios">Orarios por Servicios</option>
    <option value="Otras Rentas">Otras Rentas</option>
    <option value="Otras Rentas (Rentas Presuntas)">Otras Rentas (Rentas Presuntas)</option>
    <option value="Intereses Pagados a Personas Juridicas Residentes">Intereses Pagados a Personas Juridicas Residentes</option>
    <option value=">Intereses Pagados a Personas Fisicas Residentes">Intereses Pagados a Personas Fisicas Residentes</option>
    <option value="Retencion por Provedores del Estado">Retencion por Provedores del Estado</option>
    <option value="Juegos Telefonicos">Juegos Telefonicos</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Columna 607</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control cc_columna607">
                                                                                                                    <option  value="0" selected="" disabled="">Seleccione</option>

    <option  value="Impuesto Selectivo al Consumo">Impuesto Selectivo al Consumo</option>
    <option value="ISR Persibido">ISR Persibido</option>
    <option value="ITBIS Facturado">ITBIS Facturado</option>
    <option value="ITBIS Percibido">ITBIS Percibido</option>
    <option value="ITBIS Retenido">ITBIS Retenido</option>
    <option value="Monto Facturado">Monto Facturado</option>
    <option value=">Monto Propina Legal">Monto Propina Legal</option>
    <option value="Monto Retencion Renta">Monto Retencion Renta</option>
    <option value="Ninguno">Ninguno</option>
    <option value="Otros Impuestos/Tasas">Otros Impuestos/Tasas</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tipo de Ingreso</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control cc_tipoingreso">
     <option  value="0" selected="" disabled="">Seleccione</option>
    <option  value="Ingresos por Operaciones (No financieros)">Ingresos por Operaciones (No financieros)</option>
    <option value="Ingresos Finacieros">Ingresos Finacieros</option>
    <option value="Ingresos Extraordinarios">Ingresos Extraordinarios</option>
    <option value="Otras Rentas (Rentas Presuntas)">Otras Rentas (Rentas Presuntas)</option>
    <option value="Ingresos por Areendamientos">Ingresos por Areendamientos</option>
    <option value="Ingresos por Ventas de Activo Depreciable">Ingresos por Ventas de Activo Depreciable</option>
    <option value="Otros Ingresos">Otros Ingresos</option>
    
  </select>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label ">Reporte</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <select class="form-control cc_reporte">
                                                                                                                    <option  value="0" selected="" disabled="">Seleccione</option>

                                                        <option  value="ACTIVOS CORRIENTES">Activos Corrientes</option>
                                                        <option value="ACTIVOS DIFERIDOS">Activos Diferidos</option>
                                                        <option value="ACTIVOS FIJOS">Activos Fijos</option>
                                                        <option value="CAPITAL">Capital</option>
                                                        <option value="COSTOS">Costos</option>
                                                        <option value="DEVOLUCIONES/DESCUENTOS VENTAS">Devoluciones/Descuentos Ventas</option>
                                                        <option value="GASTOS ADMINISTRATIVOS">Gastos Administrativos</option>
                                                        <option value="GASTOS EXTRAORDINARIOS">Gastos Extraordinarios</option>
                                                        <option value=">GASTOS FINANCIEROS">Gastos Financieros</option>
                                                        <option value="GASTOS VENTAS">Gastos Ventas</option>
                                                        <option value="INVENTARIO">Inventario</option>
                                                        <option value="OTROS INGRESOS">Otros Ingresos</option>
                                                        <option value="PASIVO CORTO PLAZO">Pasivo Corto Plazo</option>
                                                        <option value="PASIVO LARGO PLAZO">Pasivo Largo Plazo</option>
                                                        <option value="PROVEEDORES INTERNACIONALES">Proveedores Internacionales</option>
                                                        <option value="PROVEEDORES LOCALES">Proveedores Locales</option>
                                                        <option value="VENTAS CONTADO">Ventas Contado</option>
                                                        <option value="VENTAS CREDITO">Ventas Credito</option>
                                                        
                                                      </select>
                                                                                                        
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tipo NCF</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control cc_tiponcf">
                                                            <option  value="0" selected="" disabled="">Seleccione</option>

    <option  value="Impuesto Selectivo al Consumo">Gastos de Personal</option>
    <option value="Gastos por Trabajos, Suministros y Servicios">Gastos por Trabajos, Suministros y Servicios</option>
    <option value="Arrendamientos">Arrendamientos</option>
    <option value="Gastos Activpors de Fijo">Gastos Activpors de Fijo</ooption>
    <option v alue="Gastos de Representacion">Gastos de Representacion</option>
    <option value="Otras Deducciones Administradas">Otras Deducciones Admintidas</option>
    <option value=">Gastos Financieros">Gastos Financieros</option>
    <option value="Gastos Extraordinarios">Gastos Extraordinarios</option>
    <option value="Compras y Gastos que Forman Parte del Costo de Venta">Compras y Gastos que Forman Parte del Costo de Venta</option>
    <option value="Adquisiciones de Activos">Adquisiciones de Activos</option>
    
  </select>


                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                           <h3>Opciones</h3>
                                           <br>
                                           <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1"  class="form-check-input cc_activo">Inactivo
                                                        </label>
                                                        <label for="inline-radio1 " class="form-check-label " style="margin-left: 100px">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Resultado Periodo
                                                        </label>
                                                        <label for="inline-radio1" class="form-check-label " style="margin-left: 100px">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Resultado Acumulado
                                                        </label>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fas fa-save"></i> Guardar
                                        </button>
                                        
                                    </div>
                                        </form>
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





        <table class="table table-sm data"  id="tablacc2" >
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Origen</th>
      <th scope="col">Grupo</th>
            <th scope="col">Tipo</th>

      <th scope="col">Descarga</th>
    </tr>
  </thead>
  <tbody id="divfiltrartablacc2">
<?php 

      $queryllenarcc2 = "SELECT cuenta,nombre,origen,tipo,grupo,descargo FROM cuentascontables WHERE activo =  'si';";
      $equeryllenarcc2 = mysqli_query($con,$queryllenarcc2);
      while ($datoscc2 = mysqli_fetch_array($equeryllenarcc2)) {


                echo'<tr cuenta="'.$datoscc2["cuenta"].'" nombre="'.$datoscc2["nombre"].'" class="subrayarrow trtablacc2">';
                echo'<th scope="row">'.$datoscc2["cuenta"].'</th>';
                echo'<td>'.$datoscc2["nombre"].'</td>';
                echo'<td>'.$datoscc2["origen"].'</td>';
                echo'<td>'.$datoscc2["grupo"].'</td>';
                echo'<td>'.$datoscc2["tipo"].'</td>';
                echo'<td>'.$datoscc2["descargo"].'</td>';
                echo'</tr>';

             }



 ?>
  









    



<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>





    

    <!-- Jquery JS-->
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
