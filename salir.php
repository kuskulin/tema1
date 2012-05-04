<?php
session_start();
$_SESSION['autenticado'] == 0;
header("Location: aplicacion.php");

?>