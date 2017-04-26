<html>
	<head>
	<title>
		This page contains an HTML form.
	</title>
	</head>
	<body>

  <!-- see how we have HTML code ABOVE and PHP code BELOW the starting PHP tag -->

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
    //_$GET is the ARRAY containing all data that is sent via the URL string, e.g. page.php?id=123&name=ben
		//FOR DEBUGGING ONLY
    //this will print out a "raw" display of the contents of the POST array. surrounding it with <pre> tags means it will look like command line font.
		
    echo '<pre>The $_POST array contains:';
		print_r($_POST); 
    print_r($_GET)
		echo '</pre>';
    echo '<pre>The $_GET array contains:';
		print_r($_POST); 
    print_r($_GET)
		echo '</pre>';
		
		//this will store each POST key/value pair in a PHP variable
		foreach($_POST as $key=>$value) ${$key}=$value;

		//this will store each GET key/value pair in a PHP variable
		foreach($_POST as $key=>$value) ${$key}=$value;
		
		$sql = "SELECT col1, col2, col3 FROM table1;";
		
		//we have already connected to the database - this will execute the query stored in the $sql variable
		$result = mysql_query($sql);
		
		//to check if it has succeeded, you just need to know that the result is NOT FALSE
		if($result) 
      echo "SELECT query success!"; 
    else 
      die("SELECT query failed");
		
    
		//you can do more advanced logic also based on success or failure
		if($result)
		{
      //use the line below to START a table IF you remove the debugging code below
      //echo "<table>";
      while($row=mysql_fetch_assoc($result))
      {
    		//this will store each SQL row's column name/value pair in a PHP variable
        foreach($row as $key=>$value) ${$key}=$value;
        
        //FOR DEBUGGING ONLY - REMOVE IF YOU ARE IMPLEMENTING A TABLE
        echo "$col1 is the first column returned in my example query.<br>";
        echo "$col2 is the second column returned in my example query.<br>";
        echo "$col3 is the third column returned in my example query.<br>";
        
        //this is how you would construct a table row where <td> = table division, i.e. a single column
        echo "<tr><td>$col1</td><td>$col2</td><td>$col3</td></tr>";
		}
    //use this line to END the table IF you remove the debugging code above
    //echo "</table>";
	?>

  <!-- see how we have PHP code ABOVE and HTML code BELOW the closing PHP tag -->
	</body>
</html>
