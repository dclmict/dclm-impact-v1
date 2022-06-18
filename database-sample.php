<?php
$host           = "mysql";
//$host           = "dbhost";
$username       = "username";
$password       = "password";
$dbname         = "dbname";

// Create connection
$con = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Could not connect to the database server: " . $con->connect_error);
}

?>