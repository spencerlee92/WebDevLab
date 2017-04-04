<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<title>Add Member Form</title>
</head>

<body>
	<h1>Add Member Form</h1>
	<form method="post" action="member_add.php">
		<p>	<label for="fname">Enter Family Name: </label>
			<input type="text" name="fname" id="fname" /></p>
		<p>	<label for="lname">Enter last name: </label>
			<input type="text" name="lname" id="lname" /></p>
		<p>	<label for="gender">Enter gender: </label>
			<input type="text" name="gender" id="gender" /></p>
		<p>	<label for="email">Enter emial: </label>
			<input type="text" name="email" id="email" /></p>
        <p>	<label for="phone">Enter phone: </label>
			<input type="text" name="phone" id="phone" /></p>
        <p>	<input type="submit" value="Add Item" /></p>
	</form>
</body>
</html>