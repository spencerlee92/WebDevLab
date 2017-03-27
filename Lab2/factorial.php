<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />   
    </head>
    <body>


<?php	
	include('mathfunctions.php');
	$num=$_GET["num"];
	
	
	if($num>0)
	{	
	
	 echo factorial($num) ;

	}
	else
	{	 
	 echo "Please input positive number";

	}
	
	?>
        
    </body>
</html>