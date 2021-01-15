       <?php
       include 'backend/conexion.php';
       ?>
        <!-- HEADER MOBILE-->
        <style type="text/css">
            
            .marginicon {

                margin-right: 10px;
            }
        </style>
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="img/logos/sistema3-1.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt marginicon"></i>Inicio
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-friends marginicon"></i>Clientes
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                   <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-user-plus marginicon"></i>Agregar nuevo cliente</a>
                                </li>
                                <li>
                                    <a href="VW_clientes.php"><i class="fas fa-list-ul marginicon"></i>Ver listado de clientes</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search marginicon"></i>Buscar clientes</a>
                                </li>
                                
                            </ul>
                        </li>


                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar marginicon"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table  marginicon"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square marginicon"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt marginicon"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt marginicon"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy marginicon"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop marginicon"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<?php
       include 'css/dropdawncss.php';
       ?>      <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img style="max-width: 75%; max-height: 75%" src="img/logos/sistema3.png" alt="CoolAdmin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt  marginicon"></i>Inicio</a>
                        
                        </li>
                       

          <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-user-friends marginicon "></i>Clientes</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">

                                <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-tools marginicon" 
                                ></i>Mantenimiento</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">

                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-user-plus marginicon"></i>Agregar nuevo cliente</a>

                                </li>

                                <li>
                                    <a href="VW_clientes.php"><i class="fas fa-list-ul marginicon"></i>Ver listado de clientes</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search marginicon"></i>Buscar clientes</a>
                                </li>
                                
                            </ul>


                  </div>
                        </li>

                                 <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-cogs marginicon"></i>Proceso</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">

                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Devoluciones S/V</a>

                                </li>

                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Factura</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Factura Rápida</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Cotización</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Depósito Facturas</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Nota de Crédito Cliente</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Conduce</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Despacho Choferes</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Procesar Lote Facturas</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Prestamos por Cobrar</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Otras CXC</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Activaciones Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Procesar Archivos Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Entregar Facturas</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Prefactura</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Procesar Facturas Cíclica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Orden de Servicios Reducida</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Registro único de Ingresos</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cog marginicon"></i>Servicios Telefónica</a>

                                </li>
                                
                            </ul>


                  </div>
                        </li>
                                <li>
                                   

 <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-file-alt marginicon"></i>Reportes</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">

                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Devoluciones S/V</a>

                                </li>

                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Factura</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Diario Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Notas de cliente</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Cuentas por Cobrar</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Depósitos Facturas</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte No Ventas</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Cotizaciones</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Órdenes de Servicio</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Data-Crédito</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reportes Cuadres</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Consulta Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Enviar Archivo Data-Crédito</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Estimados Cobros Telefónica</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Activaciones Móviles</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Prefactura</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Prefacturas Pendientes</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Materiales Faltantes Cotizaciones</a>

                                </li>
                                <li class="has-sub">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file marginicon"></i>Reporte Visita Vendedores</a>

                                </li>
                                
                            </ul>


                  </div>
                        </li>

                                </li>
                                
                            </ul>


</div>
                        </li>







<li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-people-carry marginicon "></i>Proveedor</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >

                                 <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-tools marginicon" 
                                ></i>Mantenimiento</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">

                                <li class="has-sub">
                                    <a href="WV_nuevoproveedor.php" ><i class="fas fa-user-plus marginicon"></i>Agregar nuevo proveedor</a>

                                </li>

                                <li>
                                    <a href="VW_listaprovedor.php"><i class="fas fa-list-ul marginicon"></i>Ver listado de proveedor</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-search marginicon"></i>Buscar proveedor</a>
                                </li>
                                
                            </ul>


                  </div>
                        </li>

                                <li>
                                    <a href="VW_clientes.php"><i class="fas fa-cogs marginicon"></i>Proceso</a>
                                </li>
                                <li>
                                    <a href="#" ><i class="fas fa-file-alt marginicon"></i>Reportes</a>
                                </li>
                                
                            </ul>


</div>
                        </li>



                        <li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-boxes marginicon "></i>Inventario</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >

                                 <li class="has-sub">
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-tools marginicon" 
                                ></i>Mantenimiento</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding">


                                  


                                  <li>
                                    <a href="VW_inventario.php"><i class="fas fa-shopping-bag marginicon"></i>Productos y servicios</a>
                                </li>








                                <li class="has-sub">
                                    <a href="WV_nuevoproveedor.php" ><i class="fas fa-clipboard-list marginicon"></i>Categorias</a>

                                </li>

                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-box-open marginicon"></i>Tipos de inventario</a>
                                </li>






                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-exchange-alt marginicon"></i>Movimientos de inventario</a>
                                </li>









                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-copyright marginicon"></i>Marca</a>
                                </li>






                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-warehouse marginicon"></i>Activos fijos</a>
                                </li>






                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-clipboard-list marginicon"></i>Impuestos</a>
                                </li>






                                <li>
                                    <a href="#" data-toggle="modal" data-target="#buscarproveedormodal"><i class="fas fa-battery-three-quarters marginicon"></i>Material gastable</a>
                                </li>






                               






                                
                            </ul>


                  </div>
                        </li>

                                <li>
                                    <a href="VW_clientes.php"><i class="fas fa-cogs marginicon"></i>Proceso</a>
                                </li>
                                <li>
                                    <a href="#" ><i class="fas fa-file-alt marginicon"></i>Reportes</a>
                                </li>
                                
                            </ul>


</div>
                        </li>










                        <li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-university marginicon "></i>Banco</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >

                                <li class="has-sub">
                                    <a href="#" ><i class="fas fa-tools marginicon"></i>Mantenimiento</a>

                                </li>

                                <li>
                                    <a href="VW_clientes.php"><i class="fas fa-cogs marginicon"></i>Proceso</a>
                                </li>
                                <li>
                                    <a href="#" ><i class="fas fa-file-alt marginicon"></i>Reportes</a>
                                </li>
                                
                            </ul>


</div>
                        </li>


<li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-file-invoice-dollar marginicon "></i>Contabilidad</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >

                                <li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-folder-open marginicon "></i>Catalogo de cuentas</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >
                                     <li class="has-sub">
                                    <a href="VW_cuentascontable.php" data-toggle="modal" ><i class="fas fa-list-ul marginicon"></i>Lista de Cuentas</a>

                                </li>
                                 <li class="has-sub">
                                    <a href="VW_nuevacuentacontable.php"><i class="fas fa-plus marginicon"></i>Nueva cuenta contable</a>

                                </li>


    </ul>


</div>
                        </li>


                               
                                
                            </ul>


</div>
                        </li>












                        <li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-handshake"></i>&nbsp; Recursos Humanos</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >

                                <li class="has-sub" >
                            <a  href="#" class="dropdown-btna" desplegado="no">
                                <i class="fas fa-tools marginicon"></i>Mantenimiento</a>
                            <div class="dropdown-containera">
                                <ul class="list-unstyled ulpadding a" >
                                     <li class="has-sub">
                                    <a href="puesto.php" data-toggle="modal" ><i class="fas fa-toolbox"></i>&nbsp; Puestos</a>

                                </li>
                                 <li>
                                   <a href="#" data-toggle="modal" data-target="#exampleModal20"><i class="fas fa-plus"></i>&nbsp; Nuevo puesto</a>
                                </li>



</div>
                        </li>


                               
                                
                            </ul>


</div>
                        </li>




                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar marginicon"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table marginicon"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square marginicon" ></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt marginicon"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt marginicon"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy marginicon"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop marginicon"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


<?php
include 'modals.php'
?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Pedro Vinicio</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="backend/cerrarsesion.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->