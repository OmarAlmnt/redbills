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
    <link rel="stylesheet" href="js/Izitoast/iziToast-master/dist/css/iziToast.min.css">
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
                    













 <div class="card">
                                    <div class="card-header">
                                        <strong>Nuevo Proveedor</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" id="datosnp" class="form-horizontal btninsertarprv formnuevoproveedor needs-validation" novalidate>
                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Nombre*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input  placeholder="Nombre" name="nombre" class="form-control limpiarcp" id="nombreproveedor"   aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
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
                                                    <label for="email-input" class=" form-control-label text-danger">Cédula/RNC*</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="cedularnc" class="form-control limpiarcp" id="documentoproveedor" placeholder="Cédula/RNC" aria-required="true" aria-invalid="false" required>
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
                                                    <label for="email-input" class=" form-control-label text-danger">Pais*</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="pais" class="form-control cc_tipo" id="paisproveedor" aria-required="true" aria-invalid="false" required>

                                                        <option value="AF">Afganistán</option>
<option value="Albania">Albania</option>
<option value="Alemania">Alemania</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antártida">Antártida</option>
<option value="Antigua y Barbuda">Antigua y Barbuda</option>
<option value="Antillas Holandesas">Antillas Holandesas</option>
<option value="Arabia Saudí">Arabia Saudí</option>
<option value="Argelia">Argelia</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaiyán">Azerbaiyán</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrein">Bahrein</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Bélgica">Bélgica</option>
<option value="Belice">Belice</option>
<option value="Benin">Benin</option>
<option value="Bermudas">Bermudas</option>
<option value="Bielorrusia">Bielorrusia</option>
<option value="Birmania">Birmania</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brasil">Brasil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Bután">Bután</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Camboya">Camboya</option>
<option value="Camerún">Camerún</option>
<option value="Canadá">Canadá</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Chipre">Chipre</option>
<option value="Ciudad del Vaticano (Santa Sede)">Ciudad del Vaticano (Santa Sede)</option>
<option value="Colombia">Colombia</option>
<option value="Comores">Comores</option>
<option value="Congo">Congo</option>
<option value="Congo, República Democrática del">Congo, República Democrática del</option>
<option value="Corea">Corea</option>
<option value="Corea del Norte">Corea del Norte</option>
<option value="Costa de Marfíl">Costa de Marfíl</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Dinamarca">Dinamarca</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Ecuador">Ecuador</option>
<option value="Egipto">Egipto</option>
<option value="El Salvador">El Salvador</option>
<option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
<option value="Eritrea">Eritrea</option>
<option value="Eslovenia">Eslovenia</option>
<option value="España" selected>España</option>
<option value="Estados Unidos">Estados Unidos</option>
<option value="Estonia">Estonia</option>
<option value="Etiopía">Etiopía</option>
<option value="Fiji">Fiji</option>
<option value="Filipinas">Filipinas</option>
<option value="Finlandia">Finlandia</option>
<option value="Francia">Francia</option>
<option value="Gabón">Gabón</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Granada">Granada</option>
<option value="Grecia">Grecia</option>
<option value="Groenlandia">Groenlandia</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guayana">Guayana</option>
<option value="Guayana Francesa">Guayana Francesa</option>
<option value="Guinea">Guinea</option>
<option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Haití">Haití</option>
<option value="Honduras">Honduras</option>
<option value="Hungría">Hungría</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Irak">Irak</option>
<option value="Irán">Irán</option>
<option value="Irlanda">Irlanda</option>
<option value="Isla Bouvet">Isla Bouvet</option>
<option value="Isla de Christmas">Isla de Christmas</option>
<option value="Islandia">Islandia</option>
<option value="Islas Caimán">Islas Caimán</option>
<option value="Islas Cook">Islas Cook</option>
<option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
<option value="Islas Faroe">Islas Faroe</option>
<option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
<option value="Islas Malvinas">Islas Malvinas</option>
<option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
<option value="Islas Marshall">Islas Marshall</option>
<option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
<option value="Islas Palau">Islas Palau</option>
<option value="Islas Salomón">Islas Salomón</option>
<option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
<option value="Islas Tokelau">Islas Tokelau</option>
<option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
<option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
<option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
<option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
<option value="Israel">Israel</option>
<option value="Italia">Italia</option>
<option value="Jamaica">Jamaica</option>
<option value="Japón">Japón</option>
<option value="Jordania">Jordania</option>
<option value="Kazajistán">Kazajistán</option>
<option value="Kenia">Kenia</option>
<option value="Kirguizistán">Kirguizistán</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Letonia">Letonia</option>
<option value="Líbano">Líbano</option>
<option value="Liberia">Liberia</option>
<option value="Libia">Libia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituania">Lituania</option>
<option value="Luxemburgo">Luxemburgo</option>
<option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
<option value="Madagascar">Madagascar</option>
<option value="Malasia">Malasia</option>
<option value="Malawi">Malawi</option>
<option value="Maldivas">Maldivas</option>
<option value="Malí">Malí</option>
<option value="Malta">Malta</option>
<option value="Marruecos">Marruecos</option>
<option value="Martinica">Martinica</option>
<option value="Mauricio">Mauricio</option>
<option value="Israel">Israel</option>
<option value="Italia">Italia</option>
<option value="Jamaica">Jamaica</option>
<option value="Japón">Japón</option>
<option value="Jordania">Jordania</option>
<option value="Kazajistán">Kazajistán</option>
<option value="Kenia">Kenia</option>
<option value="Kirguizistán">Kirguizistán</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Letonia">Letonia</option>
<option value="Líbano">Líbano</option>
<option value="Liberia">Liberia</option>
<option value="Libia">Libia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituania">Lituania</option>
<option value="Luxemburgo">Luxemburgo</option>
<option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
<option value="Madagascar">Madagascar</option>
<option value="Malasia">Malasia</option>
<option value="Malawi">Malawi</option>
<option value="Maldivas">Maldivas</option>
<option value="Malí">Malí</option>
<option value="Malta">Malta</option>
<option value="Marruecos">Marruecos</option>
<option value="Martinica">Martinica</option>
<option value="Mauricio">Mauricio</option>
<option value="Polonia">Polonia</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reino Unido">Reino Unido</option>
<option value="República Centroafricana">República Centroafricana</option>
<option value="República Checa">República Checa</option>
<option value="República de Sudáfrica">República de Sudáfrica</option>
<option value="República Dominicana" selected="">República Dominicana</option>
<option value="República Eslovaca">República Eslovaca</option>
<option value="Reunión">Reunión</option>
<option value="Ruanda">Ruanda</option>
<option value="Rumania">Rumania</option>
<option value="Rusia">Rusia</option>
<option value="Sahara Occidental">Sahara Occidental</option>
<option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
<option value="Samoa">Samoa</option>
<option value="Samoa Americana">Samoa Americana</option>
<option value="San Marino">San Marino</option>
<option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
<option value="Santa Helena">Santa Helena</option>
<option value="Santa Lucía">Santa Lucía</option>
<option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leona">Sierra Leona</option>
<option value="Singapur">Singapur</option>
<option value="Siria">Siria</option>
<option value="Somalia">Somalia</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
<option value="Suazilandia">Suazilandia</option>
<option value="Sudán">Sudán</option>
<option value="Suecia">Suecia</option>
<option value="Suiza">Suiza</option>
<option value="Surinam">Surinam</option>
<option value="Tailandia">Tailandia</option>
<option value="Taiwán">Taiwán</option>
<option value="Tanzania">Tanzania</option>
<option value="Tayikistán">Tayikistán</option>
<option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
<option value="Timor Oriental">Timor Oriental</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad y Tobago">Trinidad y Tobago</option>
<option value="Túnez">Túnez</option>
<option value="Turkmenistán">Turkmenistán</option>
<option value="Turquía">Turquía</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ucrania">Ucrania</option>
<option value="Uganda">Uganda</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistán">Uzbekistán</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabue">Zimbabue</option>
    
    
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
                                                    <label for="email-input" class=" form-control-label text-danger ">Provincia*</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input name="provincia" placeholder="Provincia" class="form-control limpiarcp" id="provinciaproveedor" type="text" aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
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
                                                    <label for="text-input" class=" form-control-label text-danger">Sector*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="sector"  placeholder="Sector" class="form-control limpiarcp"  id="sectorproveedor" aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
  <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Dirección*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="direccion"  placeholder="Dirección" class="form-control limpiarcp"   id="direccionproveedor" aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
  <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>





                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Email*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="email"  placeholder="Email" class="form-control limpiarcp"  id="emailproveedor" aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
  <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>





                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Código postal*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="codigopostal" type="number" placeholder="Código postal" class="form-control limpiarcp" id="codigopostalproveedor"   aria-describedby="button-addon2"  aria-required="true" aria-invalid="false" required>
  <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>






                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label text-danger">Sitio web*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="sitioweb"  placeholder="Sitio web" class="form-control limpiarcp"  id="sitiowebproveedor" aria-describedby="button-addon2" aria-required="true" aria-invalid="false" required>
  <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>






 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Tipo documento*</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="tipodocumento" class="form-control"  id="tipodocumentoproveedor" aria-required="true" aria-invalid="false" required>

                                                        <option selected="" disabled value="">Seleccione una opción</option>
                                             
      <option value="Cédula">Cédula</option>
      <option value="Pasaporte">Pasaporte</option>
      <option value="RNC">RNC</option>  </select>

        <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
    
                                  
                                                </div>
                                            </div>
















<hr>




                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label ">Límite </label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="limite" type="number" placeholder="0.00" class="form-control  limiteproveedor limpiarcp" id="limiteproveedor"   aria-describedby="button-addon2"  >
  <div class="input-group-btn">
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>

                                             


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label ">Condicion (Dias) </label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="condicion" type="number" placeholder="0" class="form-control  condicionproveedor
  limpiarcp" id="condicionproveedor"  aria-describedby="button-addon2"  min="1">
  <div class="input-group-btn" >
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>


<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Catalogo Credito*</label>
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
                                                    <label for="text-input" class=" form-control-label ">Codigo Asig.</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="codigoasignado" type="number" placeholder="0" class="form-control  codigoasignadoproveedor limpiarcp" id="codigoasignadoproveedor"  aria-describedby="button-addon2"  min="0">
  <div class="input-group-btn" >
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>


                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label ">Comision (Dias)</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="comision" type="number" placeholder="0" class="form-control  comisionproveedor limpiarcp" id="comisionproveedor"  aria-describedby="button-addon2"  min="0">
  <div class="input-group-btn" >
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>
               
                                        
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label ">Inicio NCF</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <input name="inicioncf" type="text" placeholder="0" class="form-control  inicioncfproveedor limpiarcp" id="inicioncfproveedor"   aria-describedby="button-addon2"  >
  <div class="input-group-btn" >
                                                          
                                                        </div>
</div>
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label text-danger">Tipo Proveedor*</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    
                                                    <select name="tipoproveedor" class="form-control tipoproveedor " id="tipoproveedor" aria-required="true" aria-invalid="false" required>


                                                        <option selected="" disabled value="">Seleccione una opción</option>
                                             
        <option value="Normal">Normal</option>
      <option value="Bancos">Bancos</option>
      <option value="Tarjeta Crédito">Tarjeta Credito</option>  </select>

      <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo obligatorio vacío!
                                                </div>
    
                                  
                                                
<br>
<div class="col col-md-9">

                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" id="activoproveedor" name="inactivo" class="form-check-input activoproveedor">Inactivo
                                                        </label>
                                                       
                                                    </div>

                                                </div>  



</div>
                         


                                                




                                            </div>
                                            <hr>

                                            <div class="row form-group">
                                                <div class="col col-md-3" >
                                                    <label for="text-input" class=" form-control-label ">&nbsp; &nbsp; Telefonos</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <div class="input-group mb-3">
  <div class="col col-md-9">

<div class="telnnnnp">

     <div class="row form-group">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select tipotelefono">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>
   <input type="tel" name="telefono" required placeholder="+1 (999) 999 9999" class="form-control telefonop limpiarcp" aria-required="true" aria-invalid="false" required>
      <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo vacío!
                                                </div>   
  </div>
  </div>


  <hr>

      <div class="row form-group teln1">

     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select" id="titep1">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>

   <input type="tel" id="telnp1" required name="te1" placeholder="+1 (999) 999 9999" class="form-control phoneField teln1 limpiarcp" aria-required="true" aria-invalid="false" required>

   <a  data-repeater-delete="" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline btntelndep" teln="1"><i style="color: white;" class="fas fa-times"></i></a>   
   <div class="valid-feedback">
                                                Campo lleno!
                                                </div>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                Campo vacío!
                                                </div>                
  </div>
  </div>
</div>

<hr>

<button type="button" style="font-size: 18px;" class="btn btn-primary btnnumeronuevop">Agregar número nuevo</button>
   <input type="hidden" name="listadetelefonos" placeholder="+1 (999) 999 9999" value="1" class="form-control phoneField listatels">
                     </div>
  <div class="input-group-btn" >
                                                          
                                                        </div>
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


<script src="js/Izitoast/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>    
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
