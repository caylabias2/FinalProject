<?php

$servername = "localhost";
$username ="jnguyen168";
$password ="jnguyen168";
$dbname = "jnguyen168";
	
$mysqli = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($mysqli -> connect_error) {
    die ("Failed to connect to MySQL: " . $mysqli -> connect_error);
 
}else{
	echo "Connection established";
}
?>