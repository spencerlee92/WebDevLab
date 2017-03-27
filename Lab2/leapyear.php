<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />   
    </head>
    <body>

<?php	
	
	$year = $_GET["num"];
	
	function is_leapyear($n){
		if((is_numeric($year))&&(is_int($year/4))){
		if(is_int($year/100)&&(!is_int($year/400))){
			return false;
		}else{
			return true;
		}
	}else{
		return false;
	}
	}

	if((is_numeric($year))&&(is_int($year/4))){
		if(is_int($year/100)&&(!is_int($year/400))){
			
			echo "Not leap";
		}else{
			echo "leap";
		}
	}else{
		echo "Not leap";
	}
	?>
        

    </body>
</html>