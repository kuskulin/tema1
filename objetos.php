 <?php

 
 class Basedatos{
 	private $conn;
	
	function __construct()
	{
		try 
		{
    		$this->conn = new PDO("mysql:host=localhost;dbname=test","root","usuario");
		} 
		catch (PDOException $e) 
		{
    		echo $e->getMessage();
		}		
	}
	
	public function doSelect($sql)
	{
		$salida=$this->conn->query($sql);
		return $salida;
	}
	
	
 }
 
 
 class Usuario{
	
	
	const NO_AUTENTICADO=0;
	const AUTENTICADO=1;
	
		
	private $nombre;
    private $rol;
    private $ip;
    private $fecha;
    private $id;
	private $autenticado;
	
     
    function __construct($nombre)
    {
      	
	  if (isset($nombre))
	  {
	  	$this->nombre=$nombre;
		$this->autenticado=Usuario::NO_AUTENTICADO;
	  }
	  else
	  {
		$tmp=$_SESSION["phpCAS"];
		$this->nombre=$tmp["user"];
		$this->id=$this->nombre;
		$this->autenticado=Usuario::AUTENTICADO;
	  }	
      
	  $this->rol=""; 
	  $this->fecha=time();
	  $this->ip=$_SERVER['REMOTE_ADDR'];
    }
	

	/* 
	 * 
	 * funciones setter
	 * 
	 */

	public function setnombre($nombre)
    {
 	  $this->nombre=$nombre;
     }
	
	public function setrol($rol)
    {
 	  $this->rol=$rol;
     }
	
	public function setip($ip)
    {
 	  if (isset($ip))
	  {
	  	$this->ip=$ip;
      }
	  else 
	  {
	    $this->ip=$_SERVER['REMOTE_ADDR'];  
	  }
	}	
 	  
	
	public function setfecha($fecha)
    {
 	  if (isset($fecha))
	  {
	  	$this->fecha=$fecha;
	  }
	  else 
	  {
		$this->fecha=time();  
	  }	
 	  
     }
	
	public function setid($id)
    {
 	  $this->id=$id;
     }
	
	public function setautenticado($autenticado)
    {
 	  $this->autenticado=$autenticado;
     }
	
	
	/*
	 * 
	 * 	funciones getter
	 * 
	 */

	public function getname ()
    {
     return $this->nombre;
    }
	
	public function getip ()
    {
     return $this->ip;
    }
	
	public function getrol ()
    {
     return $this->rol;
    }
	
	public function getfecha ()
    {
     return $this->fecha;
    }
	
	public function getautenticado ()
    {
     return $this->autenticado;
    }
	public function getid ()
    {
     return $this->id;
    }

}

include('seguridad.php'); 

?>
<html><head>

        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8”> <title>kill aplication</title>

    </head> <body> <h1>Prueba de objeto</h1><br>
<?php
    
     
	$usuario= new Usuario();
	$midatabase= new Basedatos();
	$select="SELECT * FROM usuarios WHERE id=\"".$usuario->getid()."\"";
	$misdatos=$midatabase->doSelect($select);
	var_dump($misdatos);	
	echo "<br/>";
	echo "Nombre: ".$usuario->getname()." <br/>";	 
	echo "Fecha: ".$usuario->getfecha()." <br/>";	 
	echo "rol: ".$usuario->getrol()." <br/>";	 
	echo "autenticado: ".$usuario->getautenticado()." <br/>";	 
	
     ?>
<p/>
<a href='salir.php'>Salir del sistema</a> </body> </html>


