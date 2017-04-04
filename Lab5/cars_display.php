<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Using file functions</title> 
</head> 
<body> 
<h1>Web Development - Lab05</h1> 
<?php          
  require_once ("../../conf/settings.php");  
//please make sure the path is correct
    // complete your answer here 
$conn = @mysqli_connect($host,$user,$pswd) or die ('Database connection failure.');

@mysqli_select_db($conn,$dbnm) or die ('Table does not exist');

$query = "select car_id, make, model, price from cars";

$result = mysqli_query($conn, $query);

if(!$result) {
			echo "<p>Something is wrong with ",	$query, "</p><br><a href=\"index.php\">Return to Home Page</a><br><a href=\"searchstatusprocess.php\">Return to Search Page</a>";
            mysqli_free_result($result);
            mysqli_close($conn);
}else{
    echo "<table border=\"1\">";
	echo "<tr>\n"
		."<th scope=\"col\">Car_ID</th>\n"
		."<th scope=\"col\">Make</th>\n"
		."<th scope=\"col\">Model</th>\n"
		."<th scope=\"col\">Price</th>\n"
		."</tr>\n";

    while ($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>",$row["car_id"],"</td>";
				echo "<td>",$row["make"],"</td>";
				echo "<td>",$row["model"],"</td>";
				echo "<td>",$row["price"],"</td>";
				echo "</tr>";
    }
    echo "</table>";        
    mysqli_free_result($result);
    mysqli_close($conn);
}    
?> 
</body> 
</html> 