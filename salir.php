<?php
// Example for a simple client

// Load the settings from the central config file
include_once('config.php');
// Load the CAS lib
include_once($phpcas_path.'/CAS.php');

// Uncomment to enable debugging
//phpCAS::setDebug();

// Initialize phpCAS
phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);

phpCAS::logout();

// for this test, simply print that the authentication was successfull

?>

<html>
  <head>
    <title>Ejemplo PHP</title>
  </head>
  <body>

    <?php
      echo "<p>Has salido de la aplicacion</p>";
    ?>

  </body>
</html