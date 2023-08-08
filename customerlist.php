<html>
<head>
<title>List Students</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
    
        <style>
body {
  background-image: url('https://imgs.search.brave.com/A6a19BVarSuh4w6uLszl1Zr-2uF2AQNLyuO_kfzfyD0/rs:fit:1200:960:1/g:ce/aHR0cDovLzIuYnAu/YmxvZ3Nwb3QuY29t/Ly16WGpxc1Y2MlVa/SS9UMHk4LTdyVFpp/SS9BQUFBQUFBQU9a/SS9KY0JKTjNJMmxi/dy9zMTYwMC9IaW1h/bGF5YXMrMTUuanBn');
  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
		}
}
</style>

<h1>List Students</h1>
<br><br>

  
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
    die("Connection Error");
} 

// here are setup a query that will select all of the students on the table	
$query = "select * from custTab";

// this function processes the query in php
$result = mysqli_query($conn, $query);

// this function returns how many rows (hits) were in the query
$num = mysqli_num_rows($result);
print "There are currently $num students on file<br><br>";

// and this loop proccess the records from the query
// they were written into an associative array
// and are now returned by key
// that is the $row variable seen in the code
// the results are then printed on one line
// you can pick any fields you like to print 
while($row = mysqli_fetch_assoc($result)) {
$custNo = $row['custNo'];
$custFirst = $row['custFirst'];
$custLast = $row['custLast'];
$custAddress = $row['custAddress'];
$custCity = $row['custCity'];
print "$custNo $custFirst $custLast $custAddress $custCity<br>";
}

?>

<br>
<a href="index.html">Return </a>
</body>
</html>
