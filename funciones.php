<?php
   $title = "Dia 3";
   $slogan = "Funciones";
   $leccion = 7;

 ?>
 <html>
   <head>
   <title><?php echo $title," tema ",$leccion; ?></title>
   
   
   
</head>
<body>
	</p>
 <h1><?php echo($title) ?></h1>
 <p><i><?php echo($slogan) ?></i></p>


<?php


function factorial($numero)
{
	if ($numero==1)
	{return 1;}	
	$temp = factorial($numero-1) * $numero;
	return $temp;
};

$numero=5;
$resultado=factorial($numero);
echo "factorial de 5 es $resultado ";

print_r ($_SESSION);
?>





</body>