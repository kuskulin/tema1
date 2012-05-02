<?php
   $title = "Ejemplo 4";
   $slogan = "Ejemplo mis primeros pasos con variables";
   $leccion = 1

 ?>
 <html>
   <head>
   <title><?php echo $title," tema ",$leccion ?></title>
   
   
   
</head>
<body>
 <h1><?php echo($title) ?></h1>
 <p><i><?php echo($slogan) ?></i></p>
 <?php
 echo "<br><p><b> bla bla bla ...<b><p>";
 ?>

</p>
</br>
<h1>Ejemplos de asignacion de variables</h1>
<?php
$foo = 'Bob'; // Asigna el valor 'Bob' a $foo
$bar = &$foo; // Referencia $foo vía $bar.
$bar = "Mi nombre es $bar"; // Modifica $bar...
echo $foo; // $foo también se modifica.
echo $bar;
?>


</br>
<?php
$foo = 'Bob'; // Asigna el valor 'Bob' a $foo
$bar1 = $foo; // Referencia $foo vía $bar.
$bar1 = "Mi nombre es $bar1"; // Modifica $bar...
echo $foo; // $foo también se modifica.
echo $bar;
?>

</p>
<?php
$hola="var2";
$var2="var3";
echo $hola ."<br>";
echo $$hola;
?>

</p>
<?php
$texto = "Hola mundo";
echo gettype($texto);
echo '<br/>';
echo var_dump($texto);
echo '<br/>';
$variable = "Hola mundo";
echo gettype($variable), "<br/>";
$variable = 22;
echo gettype($variable);



echo '<p/>';
$var = 0;

// Se evalúa a true ya que $var está vacia
if (empty($var)) {
        echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
}
echo '<br/>';
// Se evalúa como true ya que $var está definida
if (isset($var)) {
        echo '$var está definida a pesar que está vacía';
}
?>


<h1> Ejercicios sobre variables</h1>
<?php 
echo '</p>';
echo PHP_VERSION;
echo '<br/>';
echo PHP_OS;
echo '<br/>';
$cantidad1=157;
$cantidad2=50;
$cantidad3=$cantidad1/$cantidad2;
settype($cantidad3,"integer");
echo 'En 157 hay ';
echo $cantidad3;
echo ' billetes de 50';
?>


<body>