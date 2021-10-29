<?php
$servername = "localhost";
$username = "u547896322_sa_farms";

$password = "Welcome@2011";
$dbname = "u547896322_sa_farms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$SITEROOT = "//". $_SERVER['SERVER_NAME'] ;
$SITEROOT = "//". $_SERVER['SERVER_NAME'] ."";

ini_set("display_errors", 0);

?>