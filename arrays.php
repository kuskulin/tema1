<?php
   $title = "Dia 2";
   $slogan = "Arrays";
   $leccion = 3;

 ?>
 <html>
   <head>
   <title><?php echo $title," tema ",$leccion; ?></title>
   
   
   
</head>
<body>
	</p>
 <h1><?php echo($title) ?></h1>
 <p><i><?php echo($slogan) ?></i></p>


<?php $ciudad = array('Santiago', 'Madrid', 'New York', 'París', 'Berlín');
echo $ciudad[3];
?>


</p>
<?php

$mineral = array(
'dorado' => 'Oro',
'plateado' => 'Plata',
'brillante' => 'Diamante',
'negro' => 'Carbón'
);
echo $mineral['brillante'];

?>

</p>
<?php
$vector['perro_chico'] = 'caniche';
$vector['perro_grande'] = 'gran danes';
echo " $vector[perro_grande] come al $vector[perro_chico]";
?>

</p>
<?php

$fruta = array(
'naranja' => array(
                  'propiedad' => 'jugosa',
                  'color' => 'naranja',
                  'sabor' => 'dulce'
                  ),
'limón' => array(
                  'propiedad' => 'jugoso',
                  'color' => 'amarillo',
                  'sabor' => 'cítrico'
                  )
);
$nombrefruta='limón';
$propiedad='color';
echo "la fruta $nombrefruta es de $propiedad ";
echo $fruta[$nombrefruta][$propiedad];

?>

</p>
</h1>Estructura foreach</h1>

</br>
 <?php
        $a = array(1, 2, 3, 4, 5);
        foreach ($a as $b)
        {
                print $b . " ";
        }
?>

</p>

<?
$moneda=array("España"=> "Peseta","Francia" => "Franco","USA" => "Dolar");
foreach ($moneda as $clave=>$valor)
{
        echo "Pais: $clave Moneda: $valor<br>";
}
?>


<?php
$matriz = array( 5 => 25, -1 => "negativo", "número 1" => "cinco");
print "<pre>"; print_r($matriz); print "<pre>";
unset ($matriz["número 1"]);
print "<pre>"; print_r($matriz); print "<pre>";
?>

</p>
<?php
$matriz[5][3] = 25;
$matriz[5][4] = 30;
$matriz[5][5] = 35;
$matriz["letra"][1] = "letra A";

$elementos = count($matriz, COUNT_RECURSIVE)-count($matriz);

print "<p>La matriz tiene $elementos elementos.</p>";
print "<pre>"; print_r($matriz); print "<pre>";
?>
</p>
<?php
$valores = array (10, 40, 15, -1);
$maximo = max($valores);
$minimo = min($valores);

print "<pre>"; print_r($valores); print "<pre>";
print "<p>El máximo de la matriz es $maximo.</p>";
print "<p>El mínimo de la matriz es $minimo.</p>";
?>
</p>

<?php
$valores = array (10, 40, 15, 'abc');
$maximo = max($valores);
$minimo = min($valores);

print "<pre>"; print_r($valores); print "<pre>";
print "<p>El máximo de la matriz es $maximo.</p>";
print "<p>El mínimo de la matriz es $minimo.</p>";
?>
</p>

<h1>Ejercicios</h1>

<br/>
<table border="1">
<?
$matriz=array("uno"=>1,"dos"=>2,"tres"=>3,"cuatro"=>4,"cinco"=>5,"seis"=>6,"siete"=>7,"ocho"=>8,);
foreach ($matriz as $clave=>$valor)
{
	echo "<tr>";
        echo "<td>clave: $clave </td><td>valor: $valor</td>";
	echo "</tr>";
}
?>
</table>
<br/>


<table border="1">
<?
foreach ($_SERVER as $clave=>$valor)
{
		echo "<tr>";
        echo "<td>clave:</td><td> $clave </td><td>valor:</td><td> $valor</td>";
        echo "</tr>";
}
?>

</table>
<br/>
<?
$matriz=array("uno"=>1,"dos"=>2,"tres"=>3,"cuatro"=>4,"cinco"=>5,"seis"=>6,"siete"=>7,"ocho"=>8,);
echo array_values($matriz);
echo "<br/>";
?>

<br/>

<?php
$fruta = array(
'naranja' => array(
                  'propiedad' => 'jugosa',
                  'color' => 'naranja',
                  'sabor' => 'dulce'
                  ),
'limón' => array(
                  'propiedad' => 'jugoso',
                  'color' => 'amarillo',
                  'sabor' => 'cítrico'
                  )
);
echo '<TABLE border="1">';

$temp=array_keys($fruta);
$cabecera=array_keys($fruta[$temp[0]]);

echo '<tr>';
echo '<td></td>';
foreach ($cabecera as $c)
{
		echo '<td>';
		echo $c;
		echo "</td>";	
} 
echo '</tr>';

foreach($fruta as $clave=>$c)
{
	echo '<tr>';
	echo "<td> $clave </td>";
	foreach($c as $d)
	{
		echo '<td>';
		echo $d;
		echo "</td>";
	}
	echo '</tr>';
	
}
echo '</TABLE>';

?>
</body>