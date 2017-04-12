<html>
	<head>
	<title>
		This page contains an HTML form.
	</title>
	</head>
	<body>
		<h1>There is a form below this h1 tag.</h1>
		<form method="POST" action="06-sqlquery.php">
			Search my table for:
			<input type="text" name="search"/>
			<input type="submit">
		</form>

	<?php
		$host = "localhost";
		$user = "sp17-610-557-01_bakelaar";
		$password = "3JmDWAmXBg";
		$database = "sp17-610-557-01_bakelaar";
		
		//this PHP function creates the connection to the MySQL database
		mysql_connect($host,$user,$password) or die("mysql_connect error");
		
		//this PHP function sets the database to use, same as "USE DATABASE" in SQL
		mysql_select_db($database) or die("mysql_select_db error");
		
		//$_POST is the ARRAY containing all HTML data that is sent to POST method
		//this will print out a "raw" display of the contents of the POST array. surrounding it with <pre> tags means it will look like command line font.
		echo '<pre>The $_POST array contains:';
		print_r($_POST); 
		echo '</pre>';
		
		//this will store each POST key/value pair in a PHP variable
		foreach($_POST as $key=>$value) ${$key}=$value;
		echo "<h3>I searched for $search</h3>"; //if our posted FORM had an input with name="search", we could display the value of it by referencing the variable with that name
		//now we want to DO something with that value
		
		$sql = "INSERT INTO table1 (row1, row2, row3) VALUES ('A','B',$search);";
		
		//we have already connected to the database - this will execute the query stored in the $sql variable
		$result = mysql_query($sql);
		
		//to check if it has succeeded, you just need to know that the result is NOT FALSE
		if($result) echo "INSERT success!"; else echo "INSERT failed!";
		
		//you can do more advanced logic also based on success or failure
		if($result)
		{
			//wrap in curly brackets for multiple lines of code
			echo "<p>Your insert query succeeded</p>".
			$insertQueryCount = $insertQueryCount+1;
		}
		else
		{
			echo "<p>Your insert failed.</p>";
			die(mysql_error());
		}
	?>

	</body>
</html>
