<?php
$host           = "mysql";
//$host           = "ict01.cjjnqqu01ipm.us-east-1.rds.amazonaws.com";
$username       = "impact2022";
$password       = "6rx@N4i9438VUG1#";
$dbname         = "impact2022";

// Create connection
$con = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Could not connect to the database server: " . $con->connect_error);
}

?>