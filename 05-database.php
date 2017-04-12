<?php

$host="localhost";
$user="sp17-610-557-01_bakelaar";
$password="3JmDWAmXBg";
$database="sp17-610-557-01_bakelaar";

//this PHP function creates the connection to the MySQL database
mysql_connect($host,$user,$database) or die("mysql_connect error");

//this PHP function sets the database to use, same as "USE DATABASE" in SQL
mysql_select_db($database) or die("mysql_select_db error");

?>
