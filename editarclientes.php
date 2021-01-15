
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
         <form>
          <div class="form-group">
            
            <input type="text" class="form-control" id="recipient-name" placeholder="Escriba aquí ...">
          </div>
        </form>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </div>
</div>




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

       <option value="1">Crédito Fiscal</option>
       <option value="2">Consumidor Final</option>
       <option value="3">Regímenes Especiales de Tributación</option>
       <option value="4">Gubernamentales</option>
       <option value="91">Comprobante para Exportaciones</option>  

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

   <input type="tel" id="teln1" name="te1" placeholder="+1 (999) 999 9999" class="form-control phoneField teln1">
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






    <script src="vendor/jquery-3.2.1.min.js"></script>
<script src="js/sweetalert.js"></script>
<script src="js/funciones.js"></script>