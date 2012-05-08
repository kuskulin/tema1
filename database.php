<?php


//include('seguridad.php'); 


?>
<html><head>

        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8”> <title>kill aplication</title>

</head> <body> 
<h1>Prueba de base de datos</h1><br>


<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=test","root","usuario");
} catch (PDOException $e) {
    echo $e->getMessage();
}


$sql = 'SELECT * FROM releases ORDER BY version';
foreach ($conn->query($sql) as $row ) {
        echo $row['name'] . "    :  ";
        echo $row['version'] . "      :  ";
        echo $row['date'] . "<br>";
}


$sql = "UPDATE releases set date =now() WHERE id > 2";
$affectedRows = $conn->exec($sql);
echo "<br/>Registros modificados: $affectedRows <br/>";

$sql = "INSERT INTO releases (version, name) VALUES (:version, :name)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':version', $numero);
$name="etch";
$numero="4.0";
if ($stmt->execute()) {
echo 'Successfully insert record <br/>';
}
else {
        echo 'Failed to insert record <br/>';
}


?>


<p/>
<a href='salir.php'>Salir del sistema</a> </body> </html>


