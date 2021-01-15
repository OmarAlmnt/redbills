//funcion de validacion
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


function filtrarclientes(busqueda,estado){

    var busqueda = $('#buscarcliente').val();
intervalo = $('#filtrotiempocliente').val();
  estado = $('#filtroestado').val();
  $('#contenedorclientes').empty();


   $.ajax({

   url: './backend/B_filtrarclientes.php',
                                            type: 'POST',
                                            async: true,
                                            data: {intervalo:intervalo,busqueda:busqueda,estado:estado},
                                          

                                            success: function(response){
                                              console.log(response);
                                               var infoestado = JSON.parse(response);
                                               $('#contenedorclientes').append(infoestado.clientes).hide().show("slow");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log(error);


                                                }

    });



}
var tipocuenta;
 var salvarprimero = 0;

 //LIMPIAR MODAL NUEVO CLIENTE
 function limpiarmodalnuevocliente(){
    salvarprimero = 1;
     $('#exampleModal2').modal('toggle');
    $('.nombrecliente').val("");
    $('.documento').val("");
    $('.sector').val("");
    $('.direccion').val("");
    $('.codigopostal').val("");
    $('.sitioweb').val("");
    $('.email').val("");
    $('.passwordcliente').val("");
    $('.usuariocliente').val("");
    $('.telefono').val("");

    telefonos.forEach(function(indexx, telefoo) {

    if (salvarprimero != 1) {

              $('.teln'+indexx).remove();



    }else{
             $('#teln'+indexx).val("");

       salvarprimero = salvarprimero + 1;

    }

  



    });

    telefonos = [1];

    telefonosp = [1];

    
}
 //LIMPIAR MODAL ACTUALIZAR CLIENTE
 function limpiarmodalactualizarcliente(){
    salvarprimero = 1;
     $('#modalactualizarcliente').modal('toggle');
    $('.a_nombrecliente').val("");
    $('.a_documento').val("");
    $('.a_sector').val("");
    $('.a_direccion').val("");
    $('.a_codigopostal').val("");
    $('.a_sitioweb').val("");
    $('.a_passwordcliente').val("");
    $('.a_usuariocliente').val("");
    $('.a_telefono').val("");


    
}
//SWITCH OFICINA VIRTUAL
 var telnu = 1;
  var telnup = 1;

  $(document).ready(function () {


  $('.switchvirtualoficina').change(function () {
 var selec = $('.switchvirtualoficina').hasClass("seleccionado");
    if (selec) {


    $('.ofv').fadeIn()
    $('.switchvirtualoficina').removeClass("seleccionado");



    }else{


          $('.ofv').fadeOut();
    $('.switchvirtualoficina').addClass("seleccionado");


    }
  });
});
var telefonos = [1];
var telefonosp = [1];

//BORRAR TELEFONO
$(document).on('click', '.btntelnde', function(e) {
e.preventDefault();
      var teln = $(this).attr("teln");

     $(".teln"+teln).hide('slow', function(){ $(".teln"+teln).remove(); });

   
 var b = '';
 for (b in telefonos) {
  if (telefonos[b] == teln) {
   telefonos.splice(b, 1);
   break;
  }
 }
    $('.listatels').val(telefonos);


      });











 $(document).on('click', '.btntelndep', function(e) {
e.preventDefault();
      var teln = $(this).attr("teln");

     $(".teln"+teln).hide('slow', function(){ $(".teln"+teln).remove(); });

   
 var b = '';
 for (b in telefonosp) {
  if (telefonosp[b] == teln) {
   telefonosp.splice(b, 1);
   break;
  }
 }
    $('.listatels').val(telefonosp);


      });
     
























//APPEND TELEFONO NUEVO NURVO CLIENTE
$(document).on('click', '.btnnumeronuevo', function(e) {{

e.preventDefault();
      telnu = telnu + 1;
  $('.telnnn').append('<div class="row form-group teln'+telnu+'"><div class="col col-md-6"><div class="input-group"><div class="input-group-btn"><div class="btn-group"><select class="custom-select" id="tite'+telnu+'"><option value="Celular" selected>Celular</option><option value="Trabajo">Trabajo</option><option value="Fax">Fax</option><option value="Casa">Casa</option></select></div></div><input required type="tel" id="teln'+telnu+'" name="te'+telnu+'" placeholder="+1 (999) 999 9999" class="form-control phoneField"><a  data-repeater-delete="" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline btntelnde" teln="'+telnu+'"><i style="color: white;" class="fas fa-times"></i></a></div></div></div>');


                      
    $('.teln'+telnu).hide().show('slow');
    telefonos.push(telnu);

    $('.listatels').val(telefonos);

      
      }});


     
    //INSERTAR NUEVO CLIENTE AJAX
$(document).on('submit', '.nuevoclienteform', function(e) {{




    e.preventDefault();

    var nombrecliente = $('.nombrecliente').val();
    var documento = $('.documento').val();
    var tipodocumento = $('.tipodocumento').val();
    var pais = $('.pais').val();
    var provincia = $('.provincia').val();
    var sector = $('.sector').val();
    var direccion = $('.direccion').val();
    var codigopostal = $('.codigopostal').val();
    var sitioweb = $('.sitioweb').val();
    var passwordcliente = $('.passwordcliente').val();
    var tipocomprobante = $('.tipocomprobante').val();
    var idvendedor = $('.idvendedor').val();
    var terminodepago = $('.terminodepago').val();
    var listadeprecio = $('.listadeprecio').val();
    var email = $('.email').val();
    var usuariocliente = $('.usuariocliente').val();
    var telefono = $('.telefono').val();
    var tipotelefono = $('.tipotelefono').val();
    var switchh = $('.switchvirtualoficina').val();




    

    $.ajax({
      url: './backend/B_nuevocliente.php',
      type: 'POST',
      async: true,
      data: {nombrecliente:nombrecliente,
        documento:documento,tipodocumento:tipodocumento,pais:pais,provincia:provincia,
        sector:sector,direccion:direccion,codigopostal:codigopostal,sitioweb:sitioweb,passwordcliente:passwordcliente,
        tipocomprobante:tipocomprobante,idvendedor:idvendedor,terminodepago:terminodepago,listadeprecio:listadeprecio,email:email,usuariocliente:usuariocliente,
        telefono:telefono,tipotelefono:tipotelefono,switchh:switchh

      },
    

      success: function(response){
        console.log(response);

        var idcli = response;

   //FOREACH INSERTAR TELEFONos
          telefonos.forEach(function(index) {

            var telf = $('#teln'+index).val();
            console.log(index);
            var tipotel = $('#tite'+index).val();



                                          $.ajax({
                                            url: './backend/B_insertartelefono.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idcli:idcli,telf:telf,tipotel:tipotel},
                                          

                                            success: function(response){
                                              console.log(response);
                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
            });
          limpiarmodalnuevocliente();
                    filtrarclientes();

          swal("Cliente registrado!", "El cliente fue registrado correctamente", "success");




 
      }, 

      error: function(error) {
          console.log(error);

          }

          });





}});

//CERRAR MODAL NUEVO CLIENTE
$(document).on('click', '.cerrarnuevocliente', function(e) {{


swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar los datos del formulario!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
      limpiarmodalnuevocliente(); 
  } else {

  }
});

}});





$(document).on('click', '.cerrarnuevopuesto', function(e) {{


swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar los datos del formulario!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
      $('#exampleModal20').modal('toggle');
    $(".nombrepuesto").val("");

  } else {

  }
});
}});






//cerrar modal actualizar cliente
$(document).on('click', '.cerraractualizarcliente', function(e) {{


swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar los datos del formulario!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
      limpiarmodalactualizarcliente(); 


  } else {

  }
});




}});

$(document).on('click', '.cerraractualizarprv', function(e) {{


swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar los datos del formulario!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
        $('#actualizarproveedor1').modal('toggle');



  } else {

  }
});


}});
//DESACTIVAR CLIENTES
$(document).on('click', '.desactivarcliente', function(e) {
                                          var idclient = $(this).attr("idcli");


swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se deshabilitarán las facturas para este cliente!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_desactivarcliente.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idclient:idclient},
                                          

                                            success: function(response){
                                              console.log(response);

                                        var busqueda = $('#buscarcliente').val();

                                        estado = $('#filtroestado').val();
                                      filtrarclientes(busqueda,estado);


                                                        swal("Cliente desactivado!", "El cliente fue desactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }
});




});



//FUNCIONES DE BUSQUEDA
$(document).on('keyup', '#buscarcliente', function(e) {


  var busqueda = $('#buscarcliente').val();

  estado = $('#filtroestado').val();
filtrarclientes(busqueda,estado);


});

$(document).on('change', '#filtroestado', function(e) {

  var busqueda = $('#buscarcliente').val();

  estado = $('#filtroestado').val();
filtrarclientes(busqueda,estado);


});
$(document).on('change', '#filtrotiempocliente', function(e) {

  var busqueda = $('#buscarcliente').val();
  estado = $('#filtroestado').val();
filtrarclientes(busqueda,estado);


});

//REACTIVAR CLIENTE
$(document).on('click', '.reactivarcliente', function(e) {

var idclient = $(this).attr("idcli");


swal({
  title: "¿Estás seguro?",
  text: "Una vez activado, se habilitarán las facturas para este cliente!",
  icon: "info",
  buttons: ["Cancelar", true],
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_activarcliente.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idclient:idclient},
                                          

                                            success: function(response){
                                              console.log(response);
                                                        filtrarclientes();

                                                        swal("Cliente activado!", "El cliente fue activado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }
});





});


//BUSCAR CLIENTE CON GET

$(document).on('click', '#btnbuscarclienteconget', function(e) {

e.preventDefault();
                                              console.log("response");

var variable = $('#busqm').val();

                                           $.ajax({
                                            url: './backend/B_encriptarvariable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {variable:variable},
                                          

                                            success: function(response){
                                              console.log(response);
                                                

                                             $(location).attr('href','./VW_clientes.php?b='+response);

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });


});

$(document).on('click', '#btnbuscarproveedorconget', function(e) {

e.preventDefault();

var variable = $('#busqp').val();

                                           $.ajax({
                                            url: './backend/B_encriptarvariable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {variable:variable},
                                          

                                            success: function(response){
                                              console.log(response);
                                                

                                             $(location).attr('href','./VW_listaprovedor.php?b='+response);

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });


});









function rellenartelefonosclienteactualizar(clienteide){


 $('.a_telnnn').empty();

                                           $.ajax({
                                            url: './backend/B_rellenartelefonosclienteactualizar.php',
                                            type: 'POST',
                                            async: true,
                                            data: {clienteide:clienteide},
                                          

                                            success: function(response){
                                              console.log(response);
                                                
                                                var infotel = JSON.parse(response);

                                                $('.a_telnnn').append(infotel.telefonos);





                                            }, 

                                           error: function(error) {
                                                console.log(error);

                                                }

                                                });









}


function rellenartelefonosprvactualizar(prvid){


 $('.telnnnnp').empty();

                                           $.ajax({
                                            url: './backend/B_rellenartelefonosprvactualizar.php',
                                            type: 'POST',
                                            async: true,
                                            data: {prvid:prvid},
                                          

                                            success: function(response){
                                              console.log(response);
                                                
                                                var infotelp = JSON.parse(response);

                                                $('.telnnnnp').append(infotelp.telefonosp);





                                            }, 

                                           error: function(error) {
                                                console.log(error);

                                                }

                                                });









}
$(document).on('click', '.llenarmodalactualizarcliente', function(e) {
                                             var clienteid = $(this).attr("idcli");

limpiarmodalactualizarcliente();
 

                                           $.ajax({
                                            url: './backend/B_llenarmodalactualizarcliente.php',
                                            type: 'POST',
                                            async: true,
                                            data: {clienteid:clienteid},
                                          

                                            success: function(response){
                                              console.log(response);
                                                
                                                var infoactua = JSON.parse(response);

                                                $('.a_nombrecliente').val(infoactua.nombrecliente);
                                                $('.a_documento').val(infoactua.documento);
                                                $('.a_sector').val(infoactua.sector);
                                                $('.a_direccion').val(infoactua.direccion);
                                                $('.a_codigopostal').val(infoactua.codigopostal);
                                                $('.a_sitioweb').val(infoactua.sitioweb);
                                                $('.a_passwordcliente').val(infoactua.passwordcliente);
                                                $('.a_usuariocliente').val(infoactua.usuariocliente);
                                                $('.a_telefono').val(infoactua.telefono);
                                                $('.a_email').val(infoactua.email);
                                                $('.a_tipocomprobante').val(infoactua.tipocomprobante);
                                                $('.a_idvendedor').val(infoactua.idvendedor);
                                                $('.a_terminodepago').val(infoactua.terminodepago);
                                                $('.a_listadeprecio').val(infoactua.listadeprecio);


                                                rellenartelefonosclienteactualizar(clienteid);
                                                $('.a_telnnn').append(infoactua.clienteeid);





                                            }, 

                                            error: function(error) {
                                                console.log(error);

                                                }

                                                });




});


$(document).on('click', '.btnvercliente', function(e) {

      var idcliente = $(this).attr("idcli");


                                                 $.ajax({
                                            url: './backend/B_encriptarvariable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {variable:idcliente},
                                          

                                            success: function(response){
                                              console.log(response);
                                                

                                                  $(location).attr('href','./VW_perfilclientes.php?ic='+response);

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });






});

$(document).on('submit', '.actualizarclienteform', function(e) {




    e.preventDefault();


      var a_nombrecliente = $('.a_nombrecliente').val();
      var a_documento = $('.a_documento').val();
      var a_sector = $('.a_sector').val();
      var a_direccion = $('.a_direccion').val();
      var a_codigopostal = $('.a_codigopostal').val();
      var a_sitioweb = $('.a_sitioweb').val();
      var a_passwordcliente = $('.a_passwordcliente').val();
      var a_usuariocliente = $('.a_usuariocliente').val();
      var a_telefono = $('.a_telefono').val();
      var a_email = $('.a_email').val();
      var a_tipocomprobante = $('.a_tipocomprobante').val();
      var a_idvendedor = $('.a_idvendedor').val();
      var a_terminodepago = $('.a_terminodepago').val();
      var a_listadeprecio = $('.a_listadeprecio').val();
      var a_tipodocumento = $('.a_tipodocumento').val();
       var a_pais = $('.a_pais').val();
      var a_provincia = $('.a_provincia').val();
           var idclientee = $('.idcliente').val();
           var a_telefonop = $('.a_telefonop').val();



    

    $.ajax({
      url: './backend/B_actualizarcliente.php',
      type: 'POST',
      async: true,
      data: {a_nombrecliente:a_nombrecliente,
        a_documento:a_documento,a_tipodocumento:a_tipodocumento,a_pais:a_pais,a_provincia:a_provincia,
        a_sector:a_sector,a_direccion:a_direccion,a_codigopostal:a_codigopostal,a_sitioweb:a_sitioweb,a_passwordcliente:a_passwordcliente,
        a_tipocomprobante:a_tipocomprobante,a_idvendedor:a_idvendedor,a_terminodepago:a_terminodepago,a_listadeprecio:a_listadeprecio,a_email:a_email,a_usuariocliente:a_usuariocliente,
        a_telefono:a_telefono,idclientee:idclientee,a_telefonop:a_telefonop

      },
    

      success: function(response){
        console.log(response);

        var idcli = response;

 //FOREACH actualizar TELEFONos
        telefonos.forEach(function(index, telefo) {

           var telf = $('#teln'+index).val();
          var tipotel = $('#tite'+index).val();



                                        $.ajax({
                                          url: './backend/B_insertartelefono.php',
                                          type: 'POST',
                                          async: true,
                                          data: {idcli:idcli,telf:telf,tipotel:tipotel},
                                        

                                          success: function(response){
                                            console.log(response);
                                            

                                          }, 

                                          error: function(error) {
                                              console.log("error");

                                              }

                                              });
          });
          limpiarmodalactualizarcliente();
          filtrarclientes();
          swal("Cliente actualizado!", "El cliente fue actualizado correctamente", "success");




 
      }, 

      error: function(error) {
          console.log(error);

          }

          });





});


$(document).on('click', '.a_btntelnde', function(e) {

e.preventDefault();

var idtel = $(this).attr("idtel");
var clienteid = $(this).attr("idcli");






swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar este contacto!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
                                $.ajax({
                                            url: './backend/B_borrarnumeroactualizarcliente.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idtel:idtel},
                                          

                                            success: function(response){
                                              console.log(response);
                                                $(".tele"+idtel).hide("slow")



                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });

  } else {

  }
});

                                     


});


//APPEND TELEFONO NUEVO ACTUALIZAR CLIENTE
$(document).on('click', '.a_btnnumeronuevo', function(e) {{

e.preventDefault();
      telnu = telnu + 1;
  $('.a_telnnn').append('<div class="row form-group teln'+telnu+'"><div class="col col-md-6"><div class="input-group"><div class="input-group-btn"><div class="btn-group"><select class="custom-select" id="tite'+telnu+'"><option value="Celular" selected>Celular</option><option value="Trabajo">Trabajo</option><option value="Fax">Fax</option><option value="Casa">Casa</option></select></div></div><input required type="tel" id="teln'+telnu+'" name="te'+telnu+'" placeholder="+1 (999) 999 9999" class="form-control phoneField"><a  data-repeater-delete="" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline btntelnde" teln="'+telnu+'"><i style="color: white;" class="fas fa-times"></i></a></div></div></div>');


                      
    $('.teln'+telnu).hide().show('slow');
    telefonos.push(telnu);

    $('.listatels').val(telefonos);

      
      }});

var dropdown = document.getElementsByClassName("dropdown-btna");
var i;


$(document).on('click', '.btnaddtelact', function(e) {

  var idcli = $('#idcl').val();
           var telf = $('#nuevotelefono').val();
          var tipotel = $('#titele').val();



 $.ajax({
                                            url: './backend/B_insertartelefono.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idcli:idcli,telf:telf,tipotel:tipotel},
                                          

                                            success: function(response){
                                              console.log(response);
                                                   $('#nuevotelefonoactualizar').modal('toggle');
                                                               var telf = $('#nuevotelefono').val("");
                                                               rellenartelefonosclienteactualizar(idcli);

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
            });

///DROPDOWN NAV INICIO

///DROPDOWN NAV FIN

$(document).on('click', '.dropdown-btna', function(e) {
        var desplegado = $(this).attr("desplegado");


        if (desplegado == "no") {



          $(this).next().slideDown();
                          $(this).attr("desplegado","si"); 

                          $(this).css("color","#4272d7");



  



        }




          else {

            $(this).next().slideUp();

                          $(this).attr("desplegado","no"); 

                          $(this).css("color","#555");

        }





            });




  $(document).on('change', '#selectmetodoexportar', function(e) {


      var metodo = $(this).val();
    if (metodo == "excel") {
                  tableToExcel('tablaclientes', 'DatosTablaCliente');

                }else if(metodo == "pdf"){

                    var busqueda = $('#buscarcliente').val();
                    intervalo = $('#filtrotiempocliente').val();
                    estado = $('#filtroestado').val();

                    var ancho = 1000;
                    var alto = 800;
                    var x = parseInt((window.screen.width/2) - (ancho/2));
                    var y = parseInt((window.screen.height/2) - (alto/2));

                    $url = 'reportes/cliente/RP_listaclientesPDF.php?b='+busqueda+'&i='+intervalo+'&e='+estado;
                    window.open($url,"Factura","left="+x+",top="+y+",height="+alto+",width="+ancho+",scrollbar=si,location=no,resizable=si,menubar=no");

                }
            });




















            var tableToExcel = (function() {
              var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta charset = "utf-8"></head><body><table>{table}</table></body></html>'
                , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
              return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
              var link = document.createElement("a");
            link.download = name+".xls";
            link.href = uri + base64(format(template, ctx));
            link.click();
              }


            })()






















   //INSERTAR NUEVO CLIENTE AJAX
$(document).on('submit', '.formnuevacuentacontable', function(e) {{




    e.preventDefault();

    var cc_cuenta = $('.cc_cuenta').val();
    var cc_nombre = $('.cc_nombre').val();
    var cc_origen = $('.cc_origen').val();
    var cc_descargo = $('.cc_descargo').val();
    var cc_tipo = $('.cc_tipo').val();
    var cc_grupo = $('.cc_grupo').val();
    var cc_retencionisr = $('.cc_retencionisr').val();
    var cc_tipoingreso = $('.cc_tipoingreso').val();
    var cc_tiponcf = $('.cc_tiponcf').val();
    var cc_reporte = $('.cc_reporte').val();
    var cc_columna606 = $('.cc_columna606').val();
    var cc_columna607 = $('.cc_columna607').val();
    var cc_activo = $('.cc_activo').prop("checked");


    
                                $.ajax({
                                            url: './backend/B_verificarcuentacontable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {cuentacc2:cc_descargo},
                                          

                                            success: function(response){
                                              console.log(response);

                                              if (response != "No existe") {


                                                                            $.ajax({
                                                                              url: './backend/B_nuevacuentacontable.php',
                                                                              type: 'POST',
                                                                              async: true,
                                                                              data: { cc_cuenta:cc_cuenta,cc_nombre:cc_nombre,cc_origen:cc_origen,cc_descargo:cc_descargo,cc_tipo:cc_tipo,
                                                                                cc_grupo:cc_grupo,cc_retencionisr:cc_retencionisr,cc_tipoingreso:cc_tipoingreso,cc_tiponcf:cc_tiponcf,cc_reporte:cc_reporte,
                                                                                cc_retencionisr:cc_retencionisr,cc_tipoingreso:cc_tipoingreso,cc_tiponcf:cc_tiponcf,cc_reporte:cc_reporte,cc_columna606:cc_columna606,cc_columna607:cc_columna607,cc_activo:cc_activo


                                                                              },
                                                                            

                                                                              success: function(response){
                                                                                console.log(response);



                                                                                  swal("Cuenta registrada!", "La cuenta fue registrada correctamente", "success");




                                                                         
                                                                              }, 

                                                                              error: function(error) {
                                                                                  console.log(error);

                                                                                  }

                                                                                  });



                                              }else{

                                                  swal("Error al registrar cuenta!", "La cuenta control seleccionada no existe", "error");


                                              }



                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });






}});

///////////////////////////////////////////////////////////////LLENAR input deshabilitado
$(document).on('click', ".trtablacc2", function(e) {

var cuentac2 = $(this).attr("cuenta");
var cuentac2n = $(this).attr("nombre");

$('.cc_descargo').val(cuentac2);
$('.cc_descargon').val(cuentac2n);

     $('#Cuentascontables2').modal('toggle');

});



$(document).on('click', ".trtablacc3", function(e) {

var cuentac2 = $(this).attr("cuenta");
var cuentac2n = $(this).attr("nombre");

$('.catalogocreditoproveedor').val(cuentac2);
$('.catalogocreditoproveedorc').val(cuentac2n);

     $('#Cuentascontables3').modal('toggle');

});






$.extend( true, $.fn.dataTable.defaults, {
    "language": {
        "decimal": ",",
        "thousands": ".",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoPostFix": "",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchPlaceholder": "Término de búsqueda",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "aria": {
            "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        //only works for built-in buttons, not for custom buttons
        "buttons": {
            "create": "Nuevo",
            "edit": "Cambiar",
            "remove": "Borrar",
            "copy": "<i style='color: black;' class='fas fa-copy'>",
            "csv": "<i style='color: black;' class='fas fa-file-csv'>",
            "excel": "<i style='color: green;' class='fas fa-file-excel'></i>",
            "pdf": "<i style='color: red;' class='fas fa-file-pdf'>",
            "print": "Imprimir",
            "colvis": "Visibilidad columnas",
            "collection": "Colección",
            "upload": "Seleccione fichero...."
        },
        "select": {
            "rows": {
                _: '%d filas seleccionadas',
                0: 'clic fila para seleccionar',
                1: 'una fila seleccionada'
            }
        }
    }           
} );       

$('#tablacc2').DataTable( {
    dom: 'Bfrtip',
 "ordering": false,
    buttons: [
        'copy', 'excel', 'pdf', 'csv'
    ]
} );




$('#tablacc').DataTable( {
    dom: 'Bfrtip',
 "ordering": false,
    buttons: [
        'copy', 'excel', 'pdf', 'csv'
    ]
} );


$('#tablacc3').DataTable( {
    dom: 'Bfrtip',
 "ordering": false,
    buttons: [
        'copy', 'excel', 'pdf', 'csv'
    ]
} );


function filtrarcuentas(){


var busquedacc = $('.busquedacuentacc').val();
estadocc = $('.activocc').val();;
                                $.ajax({
                                            url: './backend/B_filtrarcuentacc.php',
                                            type: 'POST',
                                            async: true,
                                            data: {busquedacc2:busquedacc,estado:estadocc},
                                          

                                            success: function(response){
                                              console.log(response);
                                               var infocc = JSON.parse(response);
                                               $('#divfiltrartablacc').empty();
                                               $('#divfiltrartablacc').append(infocc.tblcc2).hide().show("slow");





                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });




}



$(document).on('keyup', '.busquedacuentacc', function(e) {


filtrarcuentas();


});

$(document).on('change', '.activocc', function(e) {


filtrarcuentas();


});
$(document).on('keyup change', '.cc_descargo', function(e) {


var cuentacc2 = $(this).val();

                                $.ajax({
                                            url: './backend/B_verificarcuentacontable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {cuentacc2:cuentacc2},
                                          

                                            success: function(response){
                                              console.log(response);

                                              $('.cc_descargon').val(response);



                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });


});

$(document).on('keyup change', '.catalogocreditoproveedor', function(e) {


var cuentacc2 = $(this).val();

                                $.ajax({
                                            url: './backend/B_verificarcuentacontable.php',
                                            type: 'POST',
                                            async: true,
                                            data: {cuentacc2:cuentacc2},
                                          

                                            success: function(response){
                                              console.log(response);


                                              $('.catalogocreditoproveedorc').val(response);

                                              $('.tipocuentainput').val(response);


                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });


});

$(document).on('click', '.desactivarcuentacc', function(e) {

    var cuenta = $(this).attr("cuenta");

swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se deshabilitarán las facturas para este cliente!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_desactivarcuentacc.php',
                                            type: 'POST',
                                            async: true,
                                            data: {cuentacc:cuenta},
                                          

                                            success: function(response){
                                              console.log(response);


                                      filtrarcuentas();


                                                        swal("Cliente desactivado!", "El cliente fue desactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }

});
});

$(document).on('click', '.reactivarcuentacc', function(e) {

    var cuenta = $(this).attr("cuenta");

swal({
  title: "¿Estás seguro?",
  text: "Una vez reactivada, se habilitará el uso de esta cuenta!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_reactivarcuentacc.php',
                                            type: 'POST',
                                            async: true,
                                            data: {cuentacc:cuenta},
                                          

                                            success: function(response){
                                              console.log(response);


                                      filtrarcuentas();


                                                        swal("Cuenta reactivada!", "La cuenta fue reactivada correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log(error);

                                                }

                                                });
  } else {

  }

});
});


function filtrarpuestos(){


    var busqueda = $('#buscarpuesto').val();
  estado = $('#filtroestadopuesto').val();
  $('#contenedorpuestos').empty();


   $.ajax({

   url: './backend/B_filtrarpuestos.php',
                                            type: 'POST',
                                            async: true,
                                            data: {busqueda:busqueda,estado:estado},
                                          

                                            success: function(response){
                                              console.log(response);
                                               var infoestado = JSON.parse(response);
                                               $('#contenedorpuestos').append(infoestado.tblpuestos).hide().show("slow");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log(error);


                                                }

    });




}

$(document).on('submit', '#formnuevopuesto', function(e) {
e.preventDefault();
var estadopuesto = $(".estadopuesto").val();
var nombrepuesto = $(".nombrepuesto").val();
                                          $.ajax({
                                            url: './backend/B_nuevopuesto.php',
                                            type: 'POST',
                                            async: true,
                                            data: {estadopuesto:estadopuesto,nombrepuesto:nombrepuesto},
                                          

                                            success: function(response){
                                              console.log(response);



                                                        swal("Puesto creado!", "El puesto fue creado correctamente", "success");
                                                              $('#exampleModal20').modal('toggle');
                                                              $(".nombrepuesto").val("");


                                            

                                            }, 

                                            error: function(error) {
                                                console.log(error);

                                                }

                                                });



});

$(document).on('keyup', '#buscarpuesto', function(e) {

filtrarpuestos();




});

$(document).on('change', '#filtroestadopuesto', function(e) {

filtrarpuestos();




});



$(document).on('click', '.desactivarpuesto', function(e) {

    var puesto = $(this).attr("puesto");

swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se deshabilitarán los registros para este puesto!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_desactivarpuesto.php',
                                            type: 'POST',
                                            async: true,
                                            data: {puesto:puesto},
                                          

                                            success: function(response){
                                              console.log(response);


                                      filtrarpuestos();


                                                        swal("Puesto desactivado!", "El puesto fue desactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }

});
});

$(document).on('click', '.reactivarpuesto', function(e) {

    var puesto = $(this).attr("puesto");

swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se deshabilitarán los registros para este puesto!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_reactivarpuesto.php',
                                            type: 'POST',
                                            async: true,
                                            data: {puesto:puesto},
                                          

                                            success: function(response){
                                              console.log(response);


                                      filtrarpuestos();


                                                        swal("Puesto desactivado!", "El puesto fue desactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }

});
});


$(document).on('click', '.togglemodaleditarcuentascontables', function(e) {

    
     $('#editarcuentacontable').modal('toggle');

     var idcuenta = $(this).attr("cuenta");


                                               $.ajax({
                                            url: './backend/B_rellenarmodalcuentacc.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idcuenta:idcuenta},
                                          

                                            success: function(response){
                                              console.log(response);

                                              var infocc = JSON.parse(response);



                                               //$('#contenedorpuestos').append(infoestado.tblpuestos).hide().show("slow");

                                                  $('.cc_cuenta').val(infocc.cuenta);
                                                  $('.cc_nombre').val(infocc.nombre);
                                                  $('.cc_origen').val(infocc.origen);
                                                  $('.cc_descargo').val(infocc.descargo);
                                                  $('.cc_tipo').val(infocc.tipo);
                                                  $('.cc_grupo').val(infocc.grupo);
                                                  $('.cc_retencionisr').val(infocc.retencionisr);
                                                  $('.cc_tipoingreso').val(infocc.tipoingreso);
                                                  $('.cc_tiponcf').val(infocc.tiponcf);
                                                  $('.cc_reporte').val(infocc.reporte);
                                                  $('.cc_columna606').val(infocc.columna606);
                                                  $('.cc_columna607').val(infocc.columna607);


                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });

});









$(document).on('submit', '.formnuevacuentacontable', function(e) {{




    e.preventDefault();

    var cc_cuenta = $('.cc_cuenta').val();
    var cc_nombre = $('.cc_nombre').val();
    var cc_origen = $('.cc_origen').val();
    var cc_descargo = $('.cc_descargo').val();
    var cc_tipo = $('.cc_tipo').val();
    var cc_grupo = $('.cc_grupo').val();
    var cc_retencionisr = $('.cc_retencionisr').val();
    var cc_tipoingreso = $('.cc_tipoingreso').val();
    var cc_tiponcf = $('.cc_tiponcf').val();
    var cc_reporte = $('.cc_reporte').val();
    var cc_columna606 = $('.cc_columna606').val();
    var cc_columna607 = $('.cc_columna607').val();
    var cc_activo = $('.cc_activo').prop("checked");





                                                                            $.ajax({
                                                                              url: './backend/B_actualizarcuentacc.php',
                                                                              type: 'POST',
                                                                              async: true,
                                                                              data: { cc_cuenta:cc_cuenta,cc_nombre:cc_nombre,cc_origen:cc_origen,cc_descargo:cc_descargo,cc_tipo:cc_tipo,
                                                                                cc_grupo:cc_grupo,cc_retencionisr:cc_retencionisr,cc_tipoingreso:cc_tipoingreso,cc_tiponcf:cc_tiponcf,cc_reporte:cc_reporte,
                                                                                cc_retencionisr:cc_retencionisr,cc_tipoingreso:cc_tipoingreso,cc_tiponcf:cc_tiponcf,cc_reporte:cc_reporte,cc_columna606:cc_columna606,cc_columna607:cc_columna607,cc_activo:cc_activo


                                                                              },
                                                                            

                                                                              success: function(response){
                                                                                console.log(response);


                                                                                filtrarcuentas();
                                                                                  swal("Cuenta actualizada!", "La cuenta fue actualizada correctamente", "success");




                                                                         
                                                                              }, 

                                                                              error: function(error) {
                                                                                  console.log(error);

                                                                                  }

                                                                                  });








}});







var telfp = 0;

$(document).on('submit','#datosnp', function(e) {{
  e.preventDefault();
  console.log('aaa');
var datos=$('#datosnp').serialize();


console.log(datos);

            $.ajax({
                    url:'./backend/B_nuevoproveedor.php',
                    type:'POST',
                    data:datos, 

                    success: function(response){
                      console.log(response);

                      if (response != "noexiste") {
                            swal("Proveedor registrado correctamente!", {
                                          icon: "success",
                                          buttons: {
                                            catch2: {
                                              text: "Ver lista de proveedores",
                                              value: "catch2",
                                            },
                                            catch: {
                                              text: "Ok",
                                              value: "catch",
                                            },
                                          },
                                        })
                                        .then((value) => {
                                          switch (value) {
                                         
                                            case "catch2":
                                                   $(location).attr('href','./VW_listaprovedor.php');
                                              break;
                                         
                                            case "catch":
                                              $('.limpiarcp').val(''); 

                                              break;
                                         
                                  
                                          }

                        });

                          
           var idcli = response;

   //FOREACH INSERTAR TELEFONos
          telefonosp.forEach(function(index) {

             telfp = $('#telnp'+index).val();
            var tipotel = $('#titep'+index).val();



                                          $.ajax({
                                            url: './backend/B_insertartelefonop.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idcli:idcli,telfp:telfp,tipotel:tipotel},
                                          

                                            success: function(response){
                                              console.log(response);
                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
            });


             }else{
iziToast.error({
    title: 'Error!',
    message: 'El catálogo de crédito seleccionado no existe!',
});

                     }
                                                                         
                    }, 

                    error: function(error) {
                      console.log('nosive')
                        console.log(error);

                        }

                        });




}});





   $(document).on('click', '.btnnumeronuevop', function(e) {{

e.preventDefault();
      telnup = telnup + 1;
  $('.telnnnnp').append('<div class="row form-group teln'+telnup+'"><div class="input-group"><div class="input-group-btn"><div class="btn-group"><select class="custom-select" id="titep'+telnup+'"><option value="Celular" selected>Celular</option><option value="Trabajo">Trabajo</option><option value="Fax">Fax</option><option value="Casa">Casa</option></select></div></div><input required type="tel" id="telnp'+telnup+'" value="" name="te'+telnup+'" placeholder="+1 (999) 999 9999" class="form-control phoneField"><a  data-repeater-delete="" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline btntelndep" teln="'+telnup+'"><i style="color: white;" class="fas fa-times"></i></a></div></div>');


                      
    $('.teln'+telnu).hide().show('slow');
    telefonosp.push(telnup);


      
      }});






function filtrarproveedor(){

    var busqueda = $('#buscarproveedor').val();
intervalo = $('#filtrotiempop').val();
  estado = $('#filtroestadop').val();
  $('#contenedorproveedor').empty();


   $.ajax({

   url: './backend/B_filtrarproveedor.php',
                                            type: 'POST',
                                            async: true,
                                            data: {intervalo:intervalo,busqueda:busqueda,estado:estado},
                                          

                                            success: function(response){
                                              console.log(response);
                                               var infoestado = JSON.parse(response);
                                               $('#contenedorproveedor').append(infoestado.clientes).hide().show("slow");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log(error);


                                                }

    });



}




$(document).on('keyup', '#buscarproveedor', function(e) {

filtrarproveedor();


});

$(document).on('change', '#filtroestadop', function(e) {

filtrarproveedor();


});
$(document).on('change', '#filtrotiempop', function(e) {

filtrarproveedor();


});






//DESACTIVAR CLIENTES
$(document).on('click', '.desactivarproveedor', function(e) {
                                          var idp = $(this).attr("idp");


swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se deshabilitarán las facturas para este proveedor!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_desactivarproveedor.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idp:idp},
                                          

                                            success: function(response){
                                              console.log(response);

                                      filtrarproveedor();


                                                        swal("Proveedor desactivado!", "El proveedor fue desactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }
});




});





$(document).on('click', '.reactivarproveedor', function(e) {
                                          var idp = $(this).attr("idp");


swal({
  title: "¿Estás seguro?",
  text: "Una vez desactivado, se habilitarán las facturas para este proveedor!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
                                          $.ajax({
                                            url: './backend/B_reactivarproveedor.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idp:idp},
                                          

                                            success: function(response){
                                              console.log(response);

                                      filtrarproveedor();


                                                        swal("Proveedor reactivado!", "El proveedor fue reactivado correctamente", "success");

                                            

                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });
  } else {

  }
});




});

















$(document).on('click', '.actualizarproveedor', function(e) {



     $('#actualizarproveedor1').modal('toggle');
      var idprv = $(this).attr("idp");

                      console.log("response");


            $.ajax({
                    url: './backend/B_llenarproveedoract.php',
                    type: 'POST',
                    async: true,
                    data: { idprv:idprv

                    },
                                                                            

                    success: function(response){
                      console.log(response);

                        var infoactuap = JSON.parse(response);


            var nombreproveedor = $('.nombreproveedor').val(infoactuap.nombreproveedor);
            var documentoproveedor = $('.documentoproveedor').val(infoactuap.documento);
            var paisproveedor = $('.paisproveedor').val(infoactuap.pais);
            var provinciaproveedor = $('.provinciaproveedor').val(infoactuap.provincia);
            var sectorproveedor = $('.sectorproveedor').val(infoactuap.sector);
            var direccionproveedor = $('.direccionproveedor').val(infoactuap.direccion);
            var emailproveedor = $('.emailproveedor').val(infoactuap.email);
            var codigopostalproveedor = $('.codigopostalproveedor').val(infoactuap.codigopostal);
            var sitiowebproveedor = $('.sitiowebproveedor').val(infoactuap.sitioweb);
            var tipodocumentoproveedor = $('.tipodocumentoproveedor').val(infoactuap.tipodocumento);
            var limiteproveedor = $('.limiteproveedor').val(infoactuap.limite);
            var condicionproveedor = $('.condicionproveedor').val(infoactuap.condicion);
            var catalogocreditoproveedor = $('.catalogocreditoproveedor').val(infoactuap.catalogocredito);
            var codigoasignadoproveedor = $('.codigoasignadoproveedor').val(infoactuap.codigoasig);
            var comisionproveedor = $('.comisionproveedor').val(infoactuap.comision);
            var inicioncfproveedor = $('.inicioncfproveedor').val(infoactuap.inicioncf);
            var tipoproveedor = $('.tipoproveedor').val(infoactuap.tipoproveedor);
            var tipoproveedor = $('#idprovedor').val(idprv);
            


rellenartelefonosprvactualizar(idprv);

                                                                         
                    }, 

                    error: function(error) {
                        console.log(error);

                        }

                        });
});






















$(document).on('click', '.modalnuevonumeroprv', function(e) {


e.preventDefault();

     $('#nuevotelefonoproveedor').modal('toggle');
     







});


$(document).on('click', '.btnaddtelactp', function(e) {


e.preventDefault();

idprv = $('#idprovedor').val();
telfp = $('#nuevotelefonop').val();
tipotelp = $('#tipotelp').val();
                                        $.ajax({
                                          url: './backend/B_insertartelefonoprv.php',
                                          type: 'POST',
                                          async: true,
                                          data: {idprv:idprv,telfp:telfp,tipotelp:tipotelp},
                                        

                                          success: function(response){
                                            console.log(response);
                                                 $('#actualizarnumerop').modal('toggle');
                                                               var telf = $('#nuevotelefonop').val("");
                                                                    $('#nuevotelefonoproveedor').modal('toggle');

                                                               rellenartelefonosprvactualizar(idprv);

                                          }, 

                                          error: function(error) {
                                              console.log("error");

                                              }

                                              });




});










$(document).on('click', '.a_btntelprv', function(e) {

e.preventDefault();

var idtelp = $(this).attr("idtel");
var clienteid = $(this).attr("idprv");






swal({
  title: "¿Estás seguro?",
  text: "Una vez cerrado, no podrás recuperar este contacto!",
  icon: "warning",
  buttons: ["Cancelar", true],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
                                $.ajax({
                                            url: './backend/B_borrarnumeroactualizarprv.php',
                                            type: 'POST',
                                            async: true,
                                            data: {idtelp:idtelp},
                                          

                                            success: function(response){
                                              console.log(response);
                                                rellenartelefonosprvactualizar(clienteid);



                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });

  } else {

  }
});

                                     


});
















































































$(document).on('submit', '.actualizarprvform', function(e) {
    e.preventDefault();
     

var datosap=$('#datosap').serialize();



    

    $.ajax({
      url: './backend/B_actualizarprv.php',
      type: 'POST',
      async: true,
      data: datosap,
    

      success: function(response){
        console.log(response);

        var idcli = response;



               $('#actualizarproveedor1').modal('toggle');

          filtrarproveedor();
          swal("Proveedor actualizado!", "El proveedor fue actualizado correctamente", "success");




 
      }, 

      error: function(error) {
          console.log(error);

          }

          });





});




