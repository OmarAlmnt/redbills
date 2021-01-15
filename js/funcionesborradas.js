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


$(document).on('keyup', '.busquedacuentacc2', function(e) {


var busquedacc2 = $(this).val();

                                $.ajax({
                                            url: './backend/B_filtrarcuentacc2.php',
                                            type: 'POST',
                                            async: true,
                                            data: {busquedacc2:busquedacc2},
                                          

                                            success: function(response){
                                              console.log(response);
                                               var infocc2 = JSON.parse(response);
                                               $('#divfiltrartablacc2').empty();
                                               $('#divfiltrartablacc2').append(infocc2.tblcc2).hide().show("slow");





                                            }, 

                                            error: function(error) {
                                                console.log("error");

                                                }

                                                });


});
//



$(document).on('keyup', '.busquedacuentacc', function(e) {


var busquedacc = $(this).val();

                                $.ajax({
                                            url: './backend/B_filtrarcuentacc.php',
                                            type: 'POST',
                                            async: true,
                                            data: {busquedacc2:busquedacc},
                                          

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


});
//







$('.copyToClipboard').click(function(e) {
  
    e.preventDefault();   
    copyToClipboard($(this).data('source'));
});
  
function copyToClipboard(tableId){ 
if (document.selection) { //IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(tableId));
    range.select();
} else if (window.getSelection) { //others
    var range = document.createRange();
    range.selectNode(document.getElementById(tableId));
    window.getSelection().addRange(range);
}
    document.execCommand("Copy");

                                                  swal("Copiado!", "Los datos fueron copiados correctamente", "success");
if (window.getSelection) {
                      window.getSelection().removeAllRanges();

                                              }else{


                                                        removeRange(range);


    }




    }