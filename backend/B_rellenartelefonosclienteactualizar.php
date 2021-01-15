<?php   

include  "conexion.php";
$clienteide = $_POST['clienteide'];
$i = 1;
$query = "SELECT * FROM telefonocliente WHERE idcliente ='".$clienteide."'";
$telefonos = "";

$querye = mysqli_query($con,$query);

while ($d = mysqli_fetch_array($querye)) {
if ($d["importancia"] == "principal") {

$telefonos .='

      <div class="row form-group tele'.$d["idtelefono"].'">
     <div class="col col-md-6">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select a_tipotelefono">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>
   <input type="tel" name="telefono" value="'.$d["telefono"].'" id="a_
   teln'.$d["idcliente"].'" required placeholder="+1 (999) 999 9999" class="form-control a_telefonop">

  </div>
  </div>
  </div>





';
}else{


$telefonos .='

      <div class="row form-group tele'.$d["idtelefono"].'">
     <div class="col col-md-6">
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select a_tipotelefono">
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>
   <input type="tel" name="telefono" value="'.$d["telefono"].'" id="a_
   teln'.$d["idcliente"].'" required placeholder="+1 (999) 999 9999" class="form-control telefono">
      <a  data-repeater-delete="" href="#" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline a_btntelnde" idcli="'.$d["idcliente"].'" idtel="'.$d["idtelefono"].'"  a_teln="1"><i style="color: white;" class="fas fa-times"></i></a>                   

  </div>
  </div>
  </div>





';



}
}





$arraydatos = array();
  $arraydatos['telefonos'] = $telefonos;

echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 



?>