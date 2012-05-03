<?php
   $title = "Dia 2";
   $slogan = "condicionales";
   $leccion = 4;

 ?>
 <html>
   <head>
   <title><?php echo $title," tema ",$leccion; ?></title>
   
   
   
</head>
<body>
	
	<p/>
 <h1><?php echo($title) ?></h1>
 <p><i><?php echo($slogan) ?></i></p>
<p/>

<?php
$cantidad=12523;
$temp=0;
if ($cantidad>=500)
  {
  	$temp=$cantidad/500;
	settype($temp,"integer");
   echo "$temp billetes de 500 <br/>";
   $cantidad = $cantidad % 500 ;
  }
?>
<p/>
 <h1>BUCLES</h1>
<br/>
    <?php
    $v=array("pepito","antonio","juan","fernando","pedro");
    $encontrado=FALSE;
    $buscar="juan";
    $i=0;
    while (!$encontrado && $i<=4)  //Salimos si acabamos
{
                    if ($v[$i]==$buscar)
                            {
                            echo "encontrado ".$buscar." en la posicion: ".$i."\n";
                            $encontrado=TRUE;    //Marco encontrado a cierto si lo encuentro
                            break;
        } else{
                    $i++;
                    }
                    if (!$encontrado)    //si no encontrado tambi?n se notifica
                    {
                    echo "Lo sentimos, ".$buscar." no existe en el array. \n";
                    }}
    ?>


<p/>

    <?php
    $v=array("pepito","antonio","juan","fernando","pedro");
    $i=0;
    while ($i<=4)
    {
            if ($v[$i]<>"juan")
    {
                    $i++;
                    continue;   //Continua y no hace nada m?s por debajo
    }
            echo $v[$i];
            $i++;
}

    ?>

<p/>
<table border="1">
<tr>	
<?php
for ($producto1=1;$producto1<=10;$producto1++)

        {
        	echo "<td>";
		for ($producto2=1;$producto2<=10;$producto2++)
		{echo "$producto1 X $producto2 =".($producto1*$producto2);
		echo "<br/>";}
echo "</td>";
        }


?>
</tr>
</table>
</body>