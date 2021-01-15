<!-------------------------------------------------------------------------- INICIO MODAL BUSCAR CLIENTE------------------------------------------------------------------------------------------->
<style type="text/css">
  
  #modalactualizarcliente {
    overflow-y: scroll;
}

#modalactualizarproveedor1 {
    overflow-y: scroll;
}

.subrayarrow:hover{

text-decoration: underline; 
cursor: pointer;


}

</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"/>


<?php         include "backend/B_encriptar.php"; 

include "backend/conexion.php"; 

?>

<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            
            <input type="text" name="b" class="form-control" id="busqm" placeholder="Escriba aquí ...">
          </div>
        
          </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary" id="btnbuscarclienteconget">Buscar</button>
      </div>
    </div>
  </div>
</div>
































































































<!--------------------------------------------------------------------------FIN MODAL BUSCAR CLIENTE, INICIO MODAL NUEVO CLIENTE------------------------------------------------------------------------------------------->


<div class="modal fade" data-backdrop="static" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
        <button type="button" class="close cerrarnuevocliente"   aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="backend/B_nuevocliente.php" class="nuevoclienteform">
          <div class="form-group">
            
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control nombrecliente"  name="nombrecliente" required placeholder="Nombre">
      <div class="valid-feedback">
        
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Cédula/RNC</label>
      <input type="text" class="form-control documento"  name="documento" required placeholder="Identificación">
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Pais</label>
      <select class="custom-select pais" name="pais" required>
        <option selected value="República Dominicana">República Dominicana</option>
        
      </select>
      
    </div>
      <div class="col-md-6 mb-3">
      <label for="validationCustom02">Provincia</label>
       <select class="custom-select provincia"  name="provincia" class="form-control">


        <option value="Azua">Azua</option>

        <option value="Bahoruco">Bahoruco</option>

        <option value="Barahona">Barahona</option>

        <option value="Dajabon">Dajabon</option>

        <option value="Santo Domingo de Guzmán">Santo Domingo de Guzmán</option>

        <option value="Duarte">Duarte</option>

        <option value="El Seybo">El Seybo</option>

        <option value="Elias Pina">Elias Pina</option>

        <option value="Espaillat">Espaillat</option>

        <option value="Hato Mayor">Hato Mayor</option>

        <option value="Independencia">Independencia</option>

        <option value="La Altagracia">La Altagracia</option>

        <option value="La Romana">La Romana</option>

        <option value="La Vega">La Vega</option>

        <option value="Maria Trinidad Sanchez">Maria Trinidad Sanchez</option>

        <option value="Monsenor Nouel">Monsenor Nouel</option>

        <option value="Monte Cristi">Monte Cristi</option>

        <option value="Monte Plata">Monte Plata</option>

        <option value="Pedernales">Pedernales</option>

        <option value="Peravia">Peravia</option>

        <option value="Puerto Plata">Puerto Plata</option>

        <option value="Salcedo">Salcedo</option>

        <option value="Samana">Samana</option>

        <option value="San Cristobal">San Cristobal</option>

        <option value="San Juan">San Juan</option>

        <option value="San Pedro de Macoris">San Pedro de Macoris</option>

        <option value="Sanchez Ramirez">Sanchez Ramirez</option>

        <option value="Santiago" selected="selected" value="">Santiago</option>

        <option value="Santiago Rodriguez">Santiago Rodriguez</option>

        <option value="Valverde">Valverde</option>

        <option value="Santo Domingo Este">Santo Domingo Este</option>

        <option value="Santo Domingo Oeste">Santo Domingo Oeste</option>

        <option value="Santo Domingo Norte">Santo Domingo Norte</option>

      </select>
     
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sector</label>
      <input type="text" class="form-control sector" name="sector"  required placeholder="Sector">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Dirección</label>
      <input type="text" class="form-control direccion"  name="direccion"  required placeholder="Dirección">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Email</label>
      <input type="text" class="form-control email"  name="email"   placeholder="Email">
    </div>



     <div class="col-md-6 mb-3">
      <label for="validationCustom01">Código postal</label>
      <input type="text" class="form-control codigopostal"  name="codigopostal" placeholder="Código postal">
    </div>


     <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sitio web</label>
      <input type="text" class="form-control sitioweb"  name="sitioweb"  placeholder="Website">
    </div>



      <div class="col-md-6 mb-3">
      <label for="validationCustom02">Tipo documento</label>
      <select name="tipodocumento"  class="form-control tipodocumento">
      <option selected="" disabled="" value="0">Seleccione una opción</option>
      <option value="Cédula">Cédula</option>
      <option value="Pasaporte">Pasaporte</option>
      <option value="RNC">RNC</option>  </select> 
     </div>



      <div class="col-md-12 mb-3">
      <h3>¿Acceso a la Oficina Virtual? 
        <label class="switch switch-3d switch-primary mr-3">
                      <input type="checkbox" name="switch" class="switch-input switchvirtualoficina switch" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </h3>
                   

    </div>



    <div class="col-md-6 mb-3">
      <label  class="ofv" for="validationCustom01">Usuario</label>
      <input type="text" class="form-control ofv usuariocliente" name="usuariocliente"   placeholder="Usuario">
    </div>


    <div class="col-md-6 mb-3">
      <label class="ofv" for="validationCustom01">Clave de acceso</label>
      <input type="text" class="form-control ofv passwordcliente" name="passwordcliente"   placeholder="Clave de acceso">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Tipo de comprobante</label>
      <select name="tipocomprobante"  class="form-control tipocomprobante">
       <option selected="" disabled="" value="0">Seleccione una opción</option>
       <option value="Crédito Fiscal">Crédito Fiscal</option>
       <option value="Consumidor Final">Consumidor Final</option>
       <option value="Regímenes Especiales de Tributación">Regímenes Especiales de Tributación</option>
       <option value="Gubernamentales">Gubernamentales</option>
       <option value="Comprobante para Exportaciones">Comprobante para Exportaciones</option>  

     </select> 
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Vendedor</label>
      <select  name="idvendedor" class="form-control idvendedor">
       <option selected=""  value="0">Seleccione una opción</option>
     </select> 
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Término de pago</label>
      <select name="terminodepago"  class="form-control terminodepago">
      <option selected="" disabled="" value="0">Seleccione una opción</option>
      <option value="De contado">De contado</option>

      <option value="15 días">15 días</option>

      <option value="30 días">30 días</option>

      <option value="45 días">45 días</option>

      <option value="60 días">60 días</option>

      <option value="90 dias">90 dias</option>
      </select> 
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Lista de precio</label>
      <select name="listadeprecio" class="form-control listadeprecio">
      <option value="Precio general">Precio general</option>
      <option value="Clientes preferenciales">Clientes preferenciales</option>
      <option value="Precio al por mayor">Precio al por mayor</option>
                        
      </select>

    </div>
   
<div class="form-group">
<h3>Teléfonos</h3>
</div>





  </div>

 
  
          </div>
         <!-- Inicio Telefono -->
<div class="telnnn">
     <div class="row form-group">
     <div class="col col-md-6">
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
   <input type="tel" name="telefono" required placeholder="+1 (999) 999 9999" class="form-control telefono">
  </div>
  </div>
  </div>


  <hr>

      <div class="row form-group teln1">
     <div class="col col-md-6">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select" id="tite1">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>

   <input type="tel" id="teln1" required name="te1" placeholder="+1 (999) 999 9999" class="form-control phoneField teln1">
   <a  data-repeater-delete="" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline btntelnde" teln="1"><i style="color: white;" class="fas fa-times"></i></a>                   
  </div>
  </div>
  </div>
</div>
  <hr>

<button type="button" style="font-size: 18px;" class="btn btn-primary btn-lg btnnumeronuevo">Agregar número nuevo</button>
   <input type="hidden" name="listadetelefonos" placeholder="+1 (999) 999 9999" value="1" class="form-control phoneField listatels">

      
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cerrarnuevocliente">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear cliente</button>
        </form>
      </div>
    </div>
  </div>
</div>
























































































































































<!--------------------------------------------------------------------------FIN MODAL NUEVO CLIENTE, INICIO MODAL ACTUALIZAR CLIENTE------------------------------------------------------------------------------------------->

<div class="modal fade" data-backdrop="static" id="modalactualizarcliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar cliente</h5>
        <button type="button" class="close cerraractualizarcliente"   aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="backend/B_nuevocliente.php" class="actualizarclienteform">
          <div class="form-group">
            
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control a_nombrecliente"  name="nombrecliente" required placeholder="Nombre">
      <div class="valid-feedback">
        
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Cédula/RNC</label>
      <input type="text" class="form-control a_documento"  name="documento" required placeholder="Identificación">
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Pais</label>
      <select class="custom-select a_pais" name="pais" required>
        <option selected value="República Dominicana">República Dominicana</option>
        
      </select>
      
    </div>
      <div class="col-md-6 mb-3">
      <label for="validationCustom02">Provincia</label>
       <select class="custom-select a_provincia"  name="provincia" class="form-control">


        <option value="Azua">Azua</option>

        <option value="Bahoruco">Bahoruco</option>

        <option value="Barahona">Barahona</option>

        <option value="Dajabon">Dajabon</option>

        <option value="Santo Domingo de Guzmán">Santo Domingo de Guzmán</option>

        <option value="Duarte">Duarte</option>

        <option value="El Seybo">El Seybo</option>

        <option value="Elias Pina">Elias Pina</option>

        <option value="Espaillat">Espaillat</option>

        <option value="Hato Mayor">Hato Mayor</option>

        <option value="Independencia">Independencia</option>

        <option value="La Altagracia">La Altagracia</option>

        <option value="La Romana">La Romana</option>

        <option value="La Vega">La Vega</option>

        <option value="Maria Trinidad Sanchez">Maria Trinidad Sanchez</option>

        <option value="Monsenor Nouel">Monsenor Nouel</option>

        <option value="Monte Cristi">Monte Cristi</option>

        <option value="Monte Plata">Monte Plata</option>

        <option value="Pedernales">Pedernales</option>

        <option value="Peravia">Peravia</option>

        <option value="Puerto Plata">Puerto Plata</option>

        <option value="Salcedo">Salcedo</option>

        <option value="Samana">Samana</option>

        <option value="San Cristobal">San Cristobal</option>

        <option value="San Juan">San Juan</option>

        <option value="San Pedro de Macoris">San Pedro de Macoris</option>

        <option value="Sanchez Ramirez">Sanchez Ramirez</option>

        <option value="Santiago" selected="selected" value="">Santiago</option>

        <option value="Santiago Rodriguez">Santiago Rodriguez</option>

        <option value="Valverde">Valverde</option>

        <option value="Santo Domingo Este">Santo Domingo Este</option>

        <option value="Santo Domingo Oeste">Santo Domingo Oeste</option>

        <option value="Santo Domingo Norte">Santo Domingo Norte</option>

      </select>
     
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sector</label>
      <input type="text" class="form-control a_sector" name="sector"  required placeholder="Sector">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Dirección</label>
      <input type="text" class="form-control a_direccion"  name="direccion"  required placeholder="Dirección">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Email</label>
      <input type="text" class="form-control a_email"  name="email"   placeholder="Email">
    </div>



     <div class="col-md-6 mb-3">
      <label for="validationCustom01">Código postal</label>
      <input type="text" class="form-control a_codigopostal"  name="codigopostal" placeholder="Código postal">
    </div>


     <div class="col-md-6 mb-3">
      <label for="validationCustom01">Sitio web</label>
      <input type="text" class="form-control a_sitioweb"  name="sitioweb"  placeholder="Website">
    </div>



      <div class="col-md-6 mb-3">
      <label for="validationCustom02">Tipo documento</label>
      <select name="tipodocumento"  class="form-control a_tipodocumento">
      <option selected="" disabled="" value="0">Seleccione una opción</option>
      <option value="Cédula">Cédula</option>
      <option value="Pasaporte">Pasaporte</option>
      <option value="RNC">RNC</option>  </select> 
     </div>






    <div class="col-md-6 mb-3">
      <label  class="" for="validationCustom01">Usuario</label>
      <input type="text" class="form-control a_usuariocliente" name="usuariocliente"   placeholder="Usuario">
    </div>


    <div class="col-md-6 mb-3">
      <label class="ofv" for="validationCustom01">Clave de acceso</label>
      <input type="text" class="form-control a_passwordcliente" name="passwordcliente"   placeholder="Clave de acceso">
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Tipo de comprobante</label>
      <select name="tipocomprobante"  class="form-control a_tipocomprobante">
       <option selected="" disabled="" value="0">Seleccione una opción</option>

       <option value="Crédito Fiscal">Crédito Fiscal</option>
       <option value="Consumidor Final">Consumidor Final</option>
       <option value="Regímenes Especiales de Tributación">Regímenes Especiales de Tributación</option>
       <option value="Gubernamentales">Gubernamentales</option>
       <option value="Comprobante para Exportaciones">Comprobante para Exportaciones</option>  

     </select> 
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Vendedor</label>
      <select  name="idvendedor" class="form-control a_idvendedor">
       <option selected=""  value="0">Seleccione una opción</option>
     </select> 
    </div>


    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Término de pago</label>
      <select name="terminodepago"  class="form-control a_terminodepago">
      <option  disabled="" value="0">Seleccione una opción</option>
      <option value="De contado">De contado</option>

      <option value="15 días">15 días</option>

      <option value="30 días">30 días</option>

      <option value="45 días">45 días</option>

      <option value="60 días">60 días</option>

      <option value="90 dias">90 dias</option>
      </select> 
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Lista de precio</label>
      <select name="listadeprecio" class="form-control a_listadeprecio">
      <option value="Precio general">Precio general</option>
      <option value="Clientes preferenciales">Clientes preferenciales</option>
      <option value="Precio al por mayor">Precio al por mayor</option>
                        
      </select>

    </div>
   
<div class="form-group">
<h3>Teléfonos</h3>
</div>





  </div>

 
  
          </div>
         <!-- Inicio Telefono -->
<div class="a_telnnn">

</div>
  <hr>

<button type="button" style="font-size: 18px;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevotelefonoactualizar">Agregar número nuevo</button>

      
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cerraractualizarcliente">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="actualizarcl">Actualizar cliente</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--------------------------------------------------------------------------FIN MODAL NUEVO CLIENTE, INICIO MODAL ACTUALIZAR CLIENTE------------------------------------------------------------------------------------------->


<!--MODAL NUEVO TELEFONO actualizar-->
<div class="modal fade" id="nuevotelefonoactualizar" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo telefono</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  
     <div class="col col-md-12">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select" id="titele">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>

   <input type="tel" id="nuevotelefono" required name="te1" placeholder="+1 (999) 999 9999" class="form-control">
  </div>
  </div>
  
        
          </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary btnaddtelact">Añadir</button>
      </div>
    </div>
  </div>
</div>










































<!--MODAL NUEVO TELEFONO cuentascontable2-->
<div class="modal fade" id="editarcuentacontable" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Catalogo de cuentas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><div class="row">
      <div class="ml-3 col">



      </div>
      </div>
      <div class="modal-body">
        <div>
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Actualizar cuenta</strong> 
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
    <option  value="Debito">Debito</option>
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
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" class="form-check-input cc_activo">Inactivo
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
   
      
      
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        

      </div>

    </div>
  </div>
</div>















































































































































































































































<!--MODAL NUEVO  cuentascontable-->
<div class="modal fade" id="Cuentascontables" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Num. de Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-sm datas"  id="tablacc">
  <thead>
    <tr>
      <th scope="col">Cuenta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Origen</th>
      <th scope="col">Grupo</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descarga</th>
    </tr>
  </thead>
  <tbody>
      <?php 


      $queryllenarcc = "SELECT cuenta,nombre,origen,tipo,grupo,descargo FROM cuentascontables;";
      $equeryllenarcc = mysqli_query($con,$queryllenarcc);
             while ($datoscc = mysqli_fetch_array($equeryllenarcc)) {


                echo'<tr class="rellenar">';
                echo'<th scope="row">'.$datoscc["cuenta"].'</th>';
                echo'<td>'.$datoscc["nombre"].'</td>';
                echo'<td>'.$datoscc["origen"].'</td>';
                echo'<td>'.$datoscc["grupo"].'</td>';
                echo'<td>'.$datoscc["tipo"].'</td>';
                echo'<td>'.$datoscc["descargo"].'</td>';
                echo'</tr>';

             }
       ?>


  </tbody>

</table>
      </div>
      
      
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        

      </div>

    </div>
  </div>
</div>








































































<!--MODAL NUEVO TELEFONO cuentascontable2-->
<div class="modal fade" id="Cuentascontables2" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuenta Control</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><div class="row">
      <div class="ml-3 col">



      </div>
      </div>
      <div class="modal-body">
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
  </tbody>

</table>
      </div>
      
      
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        

      </div>

    </div>
  </div>
</div>









    





































































































<!--REQUERIDO SACAR EL CONTENIDO Y EL USO DE AJAX EN ESTA ZONA-->

<div class="modal fade" data-backdrop="static" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Puesto</h5>
        <button type="button" class="close cerrarnuevopuesto"   aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" id="formnuevopuesto">
          <div class="form-group">
            
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre del puesto</label>
      <input type="text" class="form-control nombrepuesto"  name="" required placeholder="Nombre">
      <div class="valid-feedback">
        
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label>Estado</label>
       <select class="custom-select estadopuesto"  name="" class="form-control">


        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
</select>
     
    </div>
      
    </div>
    <div class="col-md-6 mb-3">
     
    </div>
    </div>
                   

    </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary cerrarnuevopuesto">Cerrar</button>
        <button type="submit" class="btn btn-primary crearnuevopuesto">Crear Puesto</button>
        </form>
      </div>

  </div>

 
  
          </div>


</div>
      
    </div>
  </div>
</div>

<!--FIN DE LA REQUERICION-->

























































































































































<!--MODAL NUEVO TELEFONO actualizar-->
<div class="modal fade" id="actualizarproveedor" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo telefono</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  
     <div class="col col-md-12">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select" id="titele">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>

   <input type="tel" id="nuevotelefono" required name="te1" placeholder="+1 (999) 999 9999" class="form-control">
  </div>
  </div>
  
        
          </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary btnaddtelact">Añadir</button>
      </div>
    </div>
  </div>
</div>








<!--MODAL NUEVO TELEFONO cuentascontable2-->
<div class="modal fade" id="Cuentascontables3" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuenta Control</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><div class="row">
      <div class="ml-3 col">



      </div>
      </div>
      <div class="modal-body">
        <table class="table table-sm data"  id="tablacc3" >
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
  <tbody id="divfiltrartablacc3">
<?php 

      $queryllenarcc2 = "SELECT cuenta,nombre,origen,tipo,grupo,descargo FROM cuentascontables WHERE activo =  'si';";
      $equeryllenarcc2 = mysqli_query($con,$queryllenarcc2);
      while ($datoscc2 = mysqli_fetch_array($equeryllenarcc2)) {


                echo'<tr cuenta="'.$datoscc2["cuenta"].'" nombre="'.$datoscc2["nombre"].'" class="subrayarrow trtablacc3">';
                echo'<th scope="row">'.$datoscc2["cuenta"].'</th>';
                echo'<td>'.$datoscc2["nombre"].'</td>';
                echo'<td>'.$datoscc2["origen"].'</td>';
                echo'<td>'.$datoscc2["grupo"].'</td>';
                echo'<td>'.$datoscc2["tipo"].'</td>';
                echo'<td>'.$datoscc2["descargo"].'</td>';
                echo'</tr>';

             }



 ?>
  </tbody>

</table>
      </div>
      
      
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        

      </div>

    </div>
  </div>
</div>

































































































































































<div class="modal fade" id="buscarproveedormodal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            
            <input type="text" name="b" class="form-control" id="busqp" placeholder="Escriba aquí ...">
          </div>
        
          </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary" id="btnbuscarproveedorconget">Buscar</button>
      </div>
    </div>
  </div>
</div>