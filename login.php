<?PHP
session_start();
//session_register ("usuario_valido");

if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
{

   $usuario = $_REQUEST['usuario'];
   $clave = $_REQUEST['clave'];



   // Comprobar que el usuario esta autorizado a entrar

        $validar_passwd= auth_user($usuario,$clave);


        if ($validar_passwd)
        {
        //comprobamos los permisos (el rol) en la base de datos
        $_SESSION['usuario_valido'] = $usuario;
        $_SESSION['autenticado'] = 1;
        //$_SESSION['rol']=$rol;
        header ("Location: aplicacion.php");
        }
}


/*
function auth_user($user,$pass) {

if ($user=='yo')
        {
                return 1;
        }
return 0;
}
*/
function auth_user($user,$pass) {



    $ldapserver="ldapmail.unizar.es"; 
    $ldapbase ="ou=Accounts,dc=unizar,dc=es";


    $ds=@ldap_connect($ldapserver);

    $r =@ldap_search($ds, $ldapbase,'uid='.$user);

    if ($r) {

        $result = @ldap_get_entries( $ds, $r); if ($result[0]) {

            if (@ldap_bind( $ds, $result[0][‘dn’], $pass)) {
                return 0;
            } else {
                return -2;

            }

        }

    } return -1;

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>kill aplication</title>
</head>
<body>

<?PHP
// Sesi?n iniciada
   if (isset($_SESSION["usuario_valido"]))
   {
        //if ($_SESSION["rol"]=='mailadmin')
        header ("Location: aplicacion.php");
        }else{



// Intento de entrada fallido
   if (isset ($usuario)  && (!isset($_SESSION["usuario_valido"])))
   {
          print ("<P >Acceso no autorizado</P>\n");
   }

   if (!isset ($usuario) && (!isset($_SESSION["usuario_valido"])))
   {
          print("<FORM  NAME='login' ACTION='login.php' METHOD='POST'>\n");
          print("<table><tr><td>");
          print("<LABEL'>Usuario:</LABEL>\n");
          print("</td><td>");
          print("   <INPUT TYPE='TEXT' class=\"submit\"  NAME='usuario''></P>\n");
           print("</td></tr><tr><td>");
          print("<P><LABEL >Clave:</LABEL>\n");
          print("</td><td>");
          print("   <INPUT TYPE='PASSWORD' class=\"submit\"  NAME='clave' ></P>\n");
          print("</td></tr></table>");
          echo "<br><br>";
          print("<P><INPUT TYPE='SUBMIT' class=\"button\" VALUE='Entrar'></P>\n");

          print("</FORM>\n");
          print("<br><br>");

   }

        }
 ?>

</BODY>
</HTML>