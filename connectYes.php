<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>connected?</title>
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
    die("You Don't Connect With Me");
} 

// echo "we Are Connected!";

?>

<p><a href="index.html">Return</a></p>
</body>
</html>
