<?php
          header( "Content-Type: text/html");
          print "
          <html>
          <head>
          <title>ejemplo de formulario</title>
          </head>
          <body>

   ";


if(isset($_REQUEST["error"]) AND (!is_null ($_REQUEST["name"]))){

  if (isset($_REQUEST["name"])){
          $name=$_REQUEST["name"];
          $email=$_REQUEST["email"];
          printf ("<h2>Hola %s tu mail es  %s</h2>" ,$name, $email? $email : "-----");
		  echo "<br/>";}  
  
  
  
  if (isset ($_REQUEST['comida'])){
    	echo " Eres aficionado a la comida <br/>";
            }
 
  if (isset ($_REQUEST['alcohol'])){
    	echo " Eres aficionado al alcohol <br/>";
           }
  		  echo "<br/>";
  
  
  
 #parte del sexo
    if (isset($_REQUEST['sexo'])){
    $sexo = $_REQUEST['sexo'];
    }
    else{
    $sexo = "Not set" ;
    }
    echo "Tu sexo es $sexo <br>";

 
    
   if (isset($_REQUEST['edad']))
   {
     $select = $_REQUEST['edad'];
   }
   else
   {
     $select = "Not entered";
   }
   echo "edad  = $select";
   echo "<br/>";

   
   					 
   foreach ($_REQUEST['lenguajes'] as $lenguajes)
   {
     echo "programas en ".$lenguajes." <br>";
    }
		  
		  
		  
 }
 
 
 
 
else{
          if (isset($_REQUEST["error"])) {print " Es necesario rellenar los campos nombre y email <br/>";}  		
  	
          print "
          <br>
          <form method=\"POST\" enctype=\"multipart/form-data\" action=\"$_SERVER[PHP_SELF]\">
          <table>
          <tr>
          <td>Tu nombre:</td><td> <input type=\"text\" name=\"name\" size=30></td>
          <tr></tr>
          <td>Tu email :</td><td> <input type=\"text\" name=\"email\" size=30></td>
          </table>
          

          
          <br/>Edad
          <select name=\"edad\">
          <option value=\"18\" selected>18</option>
          <option value=\"19\" selected>19</option>
          <option value=\"20\" selected>20</option>
          <option value=\"21\" selected>21</option>
          <option value=\"22\" selected>22</option>
          <option value=\"23\" selected>23</option>
          </select>
          
          
          <br/>Sexo:           
          <input type=\"radio\" name=\"sexo\" value=\"hombre\" /> Hombre
          <input type=\"radio\" name=\"sexo\" value=\"mujer\" /> Mujer
		  
         
		  <br/>Aficiones:	         
          <input type=\"checkbox\" name=\"alcohol\" value=\"on\" /> Alcohol
          <input type=\"checkbox\" name=\"comida\" value=\"on\" /> Comida
         
		  <br/> Lenguages de programacion
		  <select multiple name=\"lenguajes[]\">
   		  <option value=\"PHP\">PHP</option>
   		  <option value=\"Python\">Python</option>
   		  <option value=\"Perl\">Perl</option>
          <option value=\"C++\">C++</option>
          <option value=\"Java\">Java</option>
          </select><br>
				
                
 		  <input type=\"hidden\" name=\"error\" value=\"on\">											         
          <input type=\"submit\" value=\"Submit\"></form>
          <br><hr>
          ";
  }
  print "</body>";
  print "</html>";
?>