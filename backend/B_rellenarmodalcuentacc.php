<?php 
$idcuenta = $_POST['idcuenta'];

include "conexion.php";


$q = "SELECT * FROM cuentascontables WHERE cuenta = '".$idcuenta."'";

$qe = mysqli_query($con,$q);

$dcuenta = mysqli_fetch_array($qe);

$cuenta = $dcuenta["cuenta"];


$nombre = $dcuenta["nombre"];

$origen = $dcuenta["origen"];

$tipo = $dcuenta["tipo"];

$descargo = $dcuenta["descargo"];

$grupo = $dcuenta["grupo"];

$retencionisr = $dcuenta["retencionisr"];

$tipoingreso = $dcuenta["tipoingreso"];

$tiponcf = $dcuenta["tiponcf"];

$reporte = $dcuenta["reporte"];

$columna606 = $dcuenta["columna606"];

$columna607 = $dcuenta["columna607"];

$balance = $dcuenta["balance"];

$activo = $dcuenta["activo"];




$arraydatos = array();

$arraydatos['cuenta'] = $cuenta;

$arraydatos['nombre'] = $nombre;

$arraydatos['origen'] = $origen;

$arraydatos['tipo'] = $tipo;

$arraydatos['descargo'] = $descargo;

$arraydatos['grupo'] = $grupo;

$arraydatos['retencionisr'] = $retencionisr;

$arraydatos['tipoingreso'] = $tipoingreso;

$arraydatos['tiponcf'] = $tiponcf;

$arraydatos['reporte'] = $reporte;

$arraydatos['columna606'] = $columna606;

$arraydatos['columna607'] = $columna607;

$arraydatos['balance'] = $balance;

$arraydatos['activo'] = $activo;



echo json_encode($arraydatos,JSON_UNESCAPED_UNICODE); 



 ?>