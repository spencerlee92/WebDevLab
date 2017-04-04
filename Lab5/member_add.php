<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<title>Member Add</title>
</head>

<body>
<?php
	// sql info or use include 'file.inc'
       require_once('../../conf/settings.php');
	
	// The @ operator suppresses the display of any error messages
	// mysqli_connect returns false if connection failed, otherwise a connection value
	$conn = @mysqli_connect($host,$user,$pswd) or die ('Database connection failure.');

    @mysqli_select_db($conn,$dbnm) or die ('Database does not exist');
  
	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>";
	} else {
		// Upon successful connection
		
		// Get data from the form
 

    $sql="DESCRIBE vipmembers";
    $result=@mysqli_query($conn,$sql);
    
    if (!$result)
    {
    echo "No table exists";
    // Create a MySQL table 
    mysqli_free_result($result);
     $query = "CREATE TABLE vipmembers (member_id INT AUTO_INCREMENT PRIMARY KEY, fname VARCHAR(40),  lname VARCHAR(40),  gender  VARCHAR(1),  email  VARCHAR(40), phone  VARCHAR(20))";

		// executes the query
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query, "</p>";
		} else {
			// display an operation successful message
			echo "<p>Success</p>";
		} // if successful query operation
        mysqli_free_result($result);
    }

        
		$fname  = $_POST["fname"];
        $lname	= $_POST["lname"];
		$gender	= $_POST["gender"];
		$email	= $_POST["email"];
        $phone	= $_POST["phone"];
		

		// Set up the SQL command to add the data into the table
		$query = "insert into vipmembers"
						."(fname, lname, gender, email, phone)"
					. "values"
						."('$fname','$lname','$gender', '$email', '$phone')";
echo $query;
		// executes the query
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query, "</p>";
		} else {
			// display an operation successful message
			echo "<p>Success</p>";
		} // if successful query operation
        mysqli_free_result($result);

		// close the database connection
		mysqli_close($conn);
	    // if successful database connection
    }
?>
</body>
</html>




