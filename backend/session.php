<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


    
$id_usuario = $_SESSION['id_usuario'];
$name = $_SESSION['nombreusuario'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
    if (!isset($name) || !isset($id_usuario) ) {
    echo'<script type="text/javascript">
    window.location.href="login.html";
   </script>';}

?>