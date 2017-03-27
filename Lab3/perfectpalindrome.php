<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Practicing string functions</title> 
</head> 
<body> 
<h1>Web Development – Lab 3</h1> 
<?php 
if(isset($_POST["data1"])){
    $str=$_POST["data1"];
    
	$lowerCase = strtolower($str);
	if(strcmp($lowerCase,strrev($lowerCase))==0){
		echo "<p>The string ".$str," is perfect palindrome</p>";
	}else{
		echo "<p>The string ".$str," is not a palindrome</p>";
	}
}else {
		echo "<p>Please enter string from the input form.</p>";
	}
?>
</body>
</html>
