<?php
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] == 1)
{

}else{
//si el usuario no está autenticado
//redirigirlo a la página de inicio de sesión
header("Location: login.php");
 }
 ?>