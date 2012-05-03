<html>
<head>
        <title>Resultado Sube Archivo</title>
</head>
<body>
<?php
        if(is_uploaded_file($_FILES['archivo']['tmp_name']))
        {
                $nombreDirectorio = "archivos/";
                $idUnico = time();
                $nombreFichero = $idUnico."_".$_FILES['archivo']['name'];
                if(move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreDirectorio.$nombreFichero))
                {
                        echo "Archivo subido correctamente";
                }
                else
                {
                        echo "No puede mover el archivo a su ubicaci?n final";
                }
        }
        else
        {
                echo "No se ha podido subir el fichero";
        }
?>
</body>
</html>