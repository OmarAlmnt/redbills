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
    <title>Dashboard</title>

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
                <h1 class="title-5 m-b-35" style="padding-left: 15px">Agregar Producto</h1>
                <div class="col-md-12">



                    <div >
                        <div class="card">
                            <div class="card-header">
                                <h4>Agregar Producto</h4>
                            </div>
                            <div class="card-body">
                                <div class="custom-tab">

                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                            aria-selected="true">General</a>
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                            aria-selected="false">Venta</a>
                                            <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                            aria-selected="false">Contact</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">






                                            <div class="card-header">
                                                <strong>Datos generales</strong>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="">

                                                        <div class="card-body card-block">
                                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3">
                                                                        <label for="text-input" class=" form-control-label">Artículo No.:</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <div class="input-group mb-3">
                                                                          <input type="text" class="form-control is-invalid"   aria-describedby="button-addon2">
                                                                          <div class="input-group-btn">
                                                                            <button class="btn btn-primary">
                                                                                <i class="fas fa-search"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="textarea-input" class=" form-control-label">Descripción:</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Descripción" class="form-control is-invalid"></textarea>

                                                                </div>

                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="email-input" class=" form-control-label">Referencia:</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="email" id="email-input" name="email-input" placeholder="Referencia" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="email-input" class=" form-control-label">Procedencia:</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="email" id="email-input" name="email-input" placeholder="Procedencia" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="email-input" class=" form-control-label">Uso:</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <input type="email" id="email-input" name="email-input" placeholder="Uso" class="form-control">

                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3">
                                                                    <label for="email-input" required class=" form-control-label">Subcategoría:</label>
                                                                </div>
                                                                <div class="col-12 col-md-9">
                                                                    <div class="input-group mb-3">
                                                                      <input style="margin-left: 10px;" type="text" class="form-control is-invalid" required="" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                                      <div class="input-group-btn">
                                                                        <button class="btn btn-primary">
                                                                            <i class="fas fa-search"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="email-input" class=" form-control-label">Unidad Compra:</label>
                                                            </div>
                                                            <div class="col-12 col-md-9">
                                                                <div class="input-group mb-3">
                                                                  <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                                  <div class="input-group-btn">
                                                                    <button class="btn btn-primary">
                                                                        <i class="fas fa-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Moneda Inventario:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="email-input" name="email-input" placeholder="RD" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Costo (Sin Imp.):</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="email-input" name="email-input" placeholder="0.00" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Fob US$:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="email" id="email-input" name="email-input" placeholder="0.00" class="form-control" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="email-input" class=" form-control-label">Marca:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="input-group mb-3">
                                                              <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                              <div class="input-group-btn">
                                                                <button class="btn btn-primary">
                                                                    <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="email-input"  class=" form-control-label ">Origen:</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="email" id="email-input" required name="email-input" placeholder="Ambos" class="form-control is-invalid">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="email-input" class=" form-control-label">Substancia:</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="input-group mb-3">
                                                          <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                          <div class="input-group-btn">
                                                            <button class="btn btn-primary">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class="is-invalid form-control-label">Tipo:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="Producto" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Existencia Producto:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="0" class="form-control" readonly>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Existencia Óptima:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="0" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Peso:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
                                                      <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                      <div class="input-group-btn">
                                                        <div class="input-group-addon bg-info">
                                                            <i >KGr</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Provedor 1:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" readonly>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Provedor 3:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" readonly>

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Comentario:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">RMA Fabricante:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">URL:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Rotacion(Dias):</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input style="margin-left: 15px;" type="email" id="email-input" name="email-input" placeholder="0" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Provedor:</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="input-group mb-3">
                                                  <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                                  <div class="input-group-btn">
                                                    <button class="btn btn-primary">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </form>
                            </div>

                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="">

                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Copiar:</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="input-group mb-3">
                                              <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Buscar..." aria-label="Artículo No.:" aria-describedby="button-addon2">
                                              <div class="input-group-btn">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Descripción Corta:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Descripción Corta" class="form-control"></textarea>

                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Codigo Barras:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="1411" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Referencia Fabrica:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Localizacion:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control">

                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Costo RD$:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="0.00" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Costo Ultimo:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="0.00" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input"  class="form-control" readonly>

                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Existencia:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="0" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Reservada:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="0" class="form-control" readonly>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Minimo:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="0" class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Maximo Venta Credito:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="999999999" class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Volumen:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="input-group mb-3">
                                          <input style="margin-left: 10px;" type="text" class="form-control" placeholder="Volumen" aria-label="Artículo No.:" aria-describedby="button-addon2">
                                          <div class="input-group-btn">
                                            <div class="input-group-addon bg-info">
                                                <i >m^3</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Provedor 2:</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" readonly>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Provedor 4:</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" readonly>

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">RMA Proveedor</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email-input" placeholder="" class="form-control">

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Comision:</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input style="margin-left: 15px;" type="email" id="email-input" name="email-input" placeholder="0.00" class="form-control">

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Garantia(Dias):</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input style="margin-left: 15px;" type="email" id="email-input" name="email-input" placeholder="0" class="form-control">

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label"></label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email-input" name="email-input" placeholder="" class="form-control" readonly>

                                </div>
                            </div>



                        </form>

                    </div>

                </div>

            </div>



        </div>


        <h2 class="text-primary">Fotografia</h2>
        <hr>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Fotografia</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Elija el archivo</label>
        </div>
    </div>
    <br>
    <h2 class="text-primary">Opciones</h2>
    <hr>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Inactivo
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    No descuento
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Recarga
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Kit
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    No fracciones
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Editae descripcion
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Venta restringida
</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
</label>
</div>




<br>
<h2 class="text-primary">Opciones</h2>
<hr>


<div class="table-data__tool-right">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
    Seleccionar</button>


    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
    No Seleccionar</button>

    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buscar:
    <input class="au-input" id="buscarcliente" type="text" placeholder="Buscar">
</div>
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ITBIS</td>

            </tr>

        </tbody>
    </table>
</div>




<br>
<h2 class="text-primary">Caracteristicas</h2>
<hr>

<div class="input-group">

  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>




<br>
<h2 class="text-primary">Comentario RMA</h2>
<hr>

<div class="input-group">

  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>













<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
        <i class="fa fa-ban"></i> Reset
    </button>
</div>


</div>
<div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">













    <div class="card">
        <div class="card-header">
            <strong>Venta</strong> 
        </div>
        <div class="card-body card-block">
            <form method="post" id="datosnp" class="form-horizontal btninsertarprv formnuevoproveedor needs-validation" novalidate>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Nivel de precio</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="input-group mb-3">
                          <input name="catalogocredito" type="number" placeholder="buscar..." class="form-control  catalogocreditoproveedor limpiarcp" id="catalogocreditoproveedor"   aria-describedby="button-addon2"  min="1" aria-required="true" aria-invalid="false" required>



                          <div class="input-group-btn">
                            <a href="" data-toggle="modal" data-target="#Cuentascontables3" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </a></div>

                            <div class="valid-feedback">
                                Campo lleno!
                            </div>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Campo obligatorio vacío!
                            </div>

                        </div>

                        <div class="input-group">
                          <input type="text" name="tipocuenta"  class="form-control catalogocreditoproveedorc tipocuenta" id="catalogocreditoproveedorc" aria-describedby="button-addon2"  min="1" disabled="" aria-required="true" aria-invalid="false" required>

                          <input type="hidden" name="tipocuenta" class="tipocuentainput">


                      </div>


                  </div>

              </div>



              <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Unidad</label>
                </div>
                <div class="col-12 col-md-9">
                    <div class="input-group mb-3">
                      <input name="catalogocredito" type="number" placeholder="buscar..." class="form-control  catalogocreditoproveedor limpiarcp" id="catalogocreditoproveedor"   aria-describedby="button-addon2"  min="1" aria-required="true" aria-invalid="false" required>



                      <div class="input-group-btn">
                        <a href="" data-toggle="modal" data-target="#Cuentascontables3" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </a></div>

                        <div class="valid-feedback">
                            Campo lleno!
                        </div>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            Campo obligatorio vacío!
                        </div>

                    </div>


                    <div class="input-group">
                      <input type="text" name="tipocuenta"  class="form-control catalogocreditoproveedorc tipocuenta" id="catalogocreditoproveedorc" aria-describedby="button-addon2"  min="1" disabled="" aria-required="true" aria-invalid="false" required>

                      <input type="hidden" name="tipocuenta" class="tipocuentainput">


                  </div>


              </div>

          </div>








          <div class="row form-group">
            <div class="col col-md-3">
                <label for="email-input" class=" form-control-label">Localidad</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="tipodocumento" class="form-control"  id="tipodocumentoproveedor" aria-required="true" aria-invalid="false" required>

                    <option selected="" value="Todas">Todas</option>

                </select>

                <div class="valid-feedback">
                    Campo lleno!
                </div>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    Campo obligatorio vacío!
                </div>


            </div>
        </div>




        <div class="row form-group">
            <div class="col col-md-3">
                <label for="email-input" class=" form-control-label">Codigo de barra</label>
            </div>
            <div class="col-12 col-md-9">
             <div class="input-group">
              <input type="text" placeholder="1508" name="tipocuenta"  class="form-control catalogocreditoproveedorc tipocuenta" id="catalogocreditoproveedorc" aria-describedby="button-addon2"   min="1" aria-required="true" aria-invalid="false" required>

              <input type="hidden" name="tipocuenta" class="tipocuentainput">


          </div>

          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>


    </div>
</div>






<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Precio especial</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  placeholder="Nombre" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Precio lista</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  placeholder="Nombre" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Precio Contado</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  placeholder="Nombre" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>
</div>
<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Precio al por mayor</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  placeholder="Nombre" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Precio anterior</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  placeholder="Nombre" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required disabled>
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>



</div>



<br>
<h2 class="text-primary">Precios especiales</h2>
<hr>





<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Fecha inicial</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input">
    </div>
  </div>
  <input type="date" class="form-control" aria-label="Text input with checkbox">
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>



</div>




<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Fecha Final</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input">
    </div>
  </div>
  <input type="date" class="form-control" aria-label="Text input with checkbox">
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>



</div>






<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Hora inicial</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input  type="time" name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required >
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>



</div>



<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Hora final</label>
    </div>
    <div class="col-12 col-md-9">
        <div class="input-group mb-3">
          <input type="time"  name="nombre" class="form-control " id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required >
          <div class="valid-feedback">
            Campo lleno!
        </div>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Campo obligatorio vacío!
        </div>

    </div>
</div>



</div>





<h2 class="text-primary">Localidades Inactivas</h2>
<hr>


<div class="table-data__tool-right">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
    Seleccionar</button>


    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
    No Seleccionar</button>

    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buscar:
    <input class="au-input" id="buscarcliente" type="text" placeholder="Buscar">
</div>
<div class="table-responsive table--no-card m-b-30">
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Santiago</td>

            </tr>

        </tbody>
    </table>
</div>
<br>
<h2 class="text-primary">Datos de la competencia</h2>
<hr>

<div class="input-group">

  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>


<br>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Articulo No.</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="input-group mb-3">
                          <input name="catalogocredito" type="number" placeholder="buscar..." class="form-control  catalogocreditoproveedor limpiarcp" id="catalogocreditoproveedor"   aria-describedby="button-addon2"  min="1" aria-required="true" aria-invalid="false" required>



                          <div class="input-group-btn">
                            <a href="" data-toggle="modal" data-target="#Cuentascontables3" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </a></div>

                            <div class="valid-feedback">
                                Campo lleno!
                            </div>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Campo obligatorio vacío!
                            </div>

                        </div>



                  </div>

              </div>



              <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Descripcion</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="input-group mb-3">
                          <input name="catalogocredito" type="text" class="form-control  catalogocreditoproveedor limpiarcp" id="catalogocreditoproveedor"   aria-describedby="button-addon2"  min="1" aria-required="true" aria-invalid="false" required readonly>



                            <div class="valid-feedback">
                                Campo lleno!
                            </div>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Campo obligatorio vacío!
                            </div>

                        </div>



                  </div>

              </div>




                            <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Descripcion</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="input-group mb-3">
                          <input name="catalogocredito" type="number" class="form-control  catalogocreditoproveedor limpiarcp" id="catalogocreditoproveedor"   aria-describedby="button-addon2"  min="1" aria-required="true" aria-invalid="false" required>



                            <div class="valid-feedback">
                                Campo lleno!
                            </div>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Campo obligatorio vacío!
                            </div>

                        </div>



                  </div>

              </div>






<br>
<br>

<div class="card-footer">
    <button id="btninsertarprv" class="btn btn-success btn-sm">
        <i class="fas fa-save"></i> Guardar
    </button>

</div>
</form>
</div>

</div>








































</div>
<div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth
        master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
        dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone.
    Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
</div>
</div>

</div>
</div>
</div>
</div>



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
