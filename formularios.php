<?php
          header( "Content-Type: text/html");
          print "
          <html>
          <head>
          <title>ejemplo de formulario</title>
          </head>
          <body>

   ";

  if (isset($_REQUEST["name"])){
          $name=$_REQUEST["name"];
          $email=$_REQUEST["email"];
          printf ("<h2>Hola %s tu mail es  %s</h2>" ,$name, $email? $email : "-----");
		  echo "<br/>";
  
  
  
  
  if (isset ($_REQUEST['mates'])){
    	$math_flag = "ON";
            }
  else{
    	$math_flag = "OFF";
            }

  if (isset ($_REQUEST['fisica'])){
    	$fis_flag = "ON";
            }
 	else{
    	$fis_flag = "OFF";
            }
  echo "\$math_flag = ".$math_flag." \$fis_flag = ".$fis_flag;
  		  echo "<br/>";
  
  
  
  
  if (isset($_REQUEST['subject'])){
    $subject = $_REQUEST['subject'];
    }
    else{
    $subject = "Not set" ;
    }
    echo "radio buton $subject <br>";
			  echo "<br/>";
			        if (isset($_REQUEST['textcontent'])){
      $text_content = $_REQUEST['textcontent'];
      }
      else{
      $text_content = "vacio";
      }

      echo "text area = $text_content";
      			  echo "<br/>";
   
   
   
   
   if (isset($_REQUEST['dropdown']))
   {
     $select = $_REQUEST['dropdown'];
   }
   else
   {
     $select = "Not entered";
   }
   echo "select = $select";
   echo "<br/>";

   
   					 
   foreach ($_REQUEST['cerveza'] as $birras)
   {
     echo $birras."<br>";
    }
		  
		  
		  
		  
        if(is_uploaded_file($_FILES['archivo']['tmp_name']))
        {
                $nombreDirectorio = "Descargas/";
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
		  
		  
		  
		  
		  
  }  else{
          print "
          <br>
          <form method=\"POST\" enctype=\"multipart/form-data\" action=\"$_SERVER[PHP_SELF]\">
          <table>
          <tr>
          <td>Tu nombre:</td><td> <input type=\"text\" name=\"name\" size=30></td>
          <tr></tr>
          <td>Tu email :</td><td> <input type=\"text\" name=\"email\" size=30></td>
          </table>
          
          <input type=\"checkbox\" name=\"mates\" value=\"on\" /> Maths
		  <input type=\"checkbox\" name=\"fisica\" value=\"on\" /> Physics
          
          <input type=\"radio\" name=\"subject\" value=\"maths\" /> Maths
          <input type=\"radio\" name=\"subject\" value=\"physics\" /> Physics
		  
		  <textarea name=\"textcontent\" cols=\"40\" rows=\"4\">
          Type your text here...
		  </textarea>			
          
          <select name=\"dropdown\">
          <option value=\"Maths\" selected>Maths</option>
          <option value=\"Physics\">Physics</option>
          </select>
		  
		  <select multiple name=\"cerveza[]\">
   		  <option value=\"SanMiguel\">San Miguel</option>
   		  <option value=\"Mahou\">Mahou</option>
   		  <option value=\"Heineken\">Heineken</option>
          <option value=\"Carlsberg\">Carlsberg</option>
          <option value=\"Aguila\">Aguila</option>
          </select><br>
				
                
          <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"5000000\">
          <input type=\"file\" size=\"40\" name=\"archivo\">
				
				
													         
          <input type=\"submit\" value=\"Submit\"></form>
          <br><hr>
          ";
  }
  print "</body>";
  print "</html>";
?>