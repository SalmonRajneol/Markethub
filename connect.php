<?php
// this connect To database
$hostname="localhost";
// database name
$username="id20508732_ct6560_salmonraj";
// database password
$password="NeolShawn123!";
// database name
$dbname="id20508732_ct6560_salmon";
// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully!";

?>