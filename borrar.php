<html>
   <head>
   <title>Ficheros</title>
   
   
   
</head>
<body>

<?php

if (isset($_REQUEST["fichero"]))
{
	
  $fichero=$_REQUEST["fichero"];	
  if (file_exists($fichero) && (is_writable($fichero)))
  {
	unlink("/var/www/tema1/".$fichero);
	echo "fichero $fichero borrado";
  }
  else 
  {
  	echo "no tengo permisos para borrar el fichero";    
  }
}
else
{
	echo "no es un fichero valido";
}
?>


</body>