<?php 

include "B_encriptar.php";

$variable = $_POST['variable'];


$enc= SED::encryption($variable);
echo $enc;

 ?>