<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="web Development :: Lab 2" />
        <meta name="keywords" content="web,development" />
        
    </head>
    <body>
	<?php

	$var = 6;
	

	$isEven = ($var%2==0);

	(is_int($var)&& $isEven) ? $out = $var." is an even number." : $out = $var . " is an odd number.";
	
	echo $out;

	
	?>
        
    </body>
</html>