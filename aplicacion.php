<?php include('seguridad.php'); ?> <html><head>

        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8”> <title>kill aplication</title>

    </head> <body> <h1>Ahora estás en una aplicación segura</h1><br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br><br>

     <dl style='border: 1px dotted; padding: 5px;'>
  <dt>Current script</dt><dd><?php print basename($_SERVER['SCRIPT_NAME']); ?></dd>
  <dt>session_name():</dt><dd> <?php print session_name(); ?></dd>
  <dt>session_id():</dt><dd> <?php print session_id(); ?></dd>
</dl>


<a href='salir.php'>Salir del sistema</a> </body> </html>

