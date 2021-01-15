<?php
include 'conexion.php';


$email = $_POST['email'];
$password = $_POST['password'];


$r = "SELECT * FROM usuario WHERE email = '".$email."' AND password = '".$password."' ";

                                                $er = mysqli_query($con,$r);
                                                $count = mysqli_num_rows($er);
                                                             while ($datosr = mysqli_fetch_array($er)) {

                                                	

                                               

                                                if($count = 1){
                                                	session_start();
                                                	$_SESSION["id_usuario"] = $datosr['id_usuario'];
                                                	$_SESSION["nombreusuario"] = $datosr['nombreusuario'];
                                                	$_SESSION["email"] = $datosr['email'];
                                                	$_SESSION["password"] = $datosr['password'];
                                                	header('location: ../index.php');

                                                }else{
                           
                                                	
                                                
}



}


?>