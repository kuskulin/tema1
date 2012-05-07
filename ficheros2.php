 <html>
   <head>
   <title>Ficheros</title>
   
   
   
</head>
<body>

<?php
$dir=opendir('.');
echo "<table>";
while ($file = readdir($dir))
{
if ($file != "." && $file != "..")
{
	
$size = filesize($file) ; // Lo pasa a Kbytes
echo "<TR><TD >".$file."</TD ><td>".$size."</TD><td><a href=\"borrar.php?fichero=".$file."\">Borrar</a></td></tr>";

}
}
closedir($dir);
echo "</table>"
?>


</body>