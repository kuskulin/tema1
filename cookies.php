<?php
session_start();
?>
<html>
<head>
<title>Generar variable de sesión</title>
</head>
<body>
<?
if (!isset($_SESSION["mivariabledesesion"]))
{$_SESSION["mivariabledesesion"] = "Hola este es el valor de la variable de sesion ";}
?>

<title>Leo variable se sesión</title>
</head>
<body>
Muestro esa variable:
<?
echo $_SESSION["mivariabledesesion"];
echo "<br/>";
print_r($_COOKIE);
?>


</body>
</html>