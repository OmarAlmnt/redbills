<?php   

include  "conexion.php";
$prvid = $_POST['prvid'];
$i = 1;
$query = "SELECT * FROM telefonoproveedor WHERE idproveedor = '".$prvid."'";
$telefonos = "";

$querye = mysqli_query($con,$query);

while ($d = mysqli_fetch_array($querye)) {
if ($d["importancia"] == "principal") {

$telefonos .='

      <div class="row form-group tele'.$d["idtelefono"].'">
     <div>
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
   <input type="tel" name="telefono" value="'.$d["telefono"].'"  required placeholder="+1 (999) 999 9999" class="form-control a_telefonop" readonly>

  </div>
  </div>
  </div>





';
}else{


$telefonos .='

      <div class="row form-group tele'.$d["idtelefono"].'">
     <div>
     <div class="input-group">
    <div class="input-group-btn">
    <div class="btn-group">
                                                                
    <select class="custom-select a_tipotelefono" readonly>
    <option value="Celular" selected>Celular</option>
    <option value="Trabajo">Trabajo</option>
    <option value="Fax">Fax</option>
    <option value="Casa">Casa</option>
  </select>
  </div>
   </div>
   <input type="tel" name="telefono" value="'.$d["telefono"].'"  required placeholder="+1 (999) 999 9999" class="form-control telefono" readonly>
      <a  data-repeater-delete="" href="#" class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline a_btntelprv" idprv="'.$d["idproveedor"].'" idtel="'.$d["idtelefono"].'"  a_teln="1"><i style="color: white;" class="fas fa-times"></i></a>                   

  </div>
  </div>
  </div>





';



}
}





$arraydatos = array();
  $arraydatos['telefonosp'] = $telefonos;

echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 



?>