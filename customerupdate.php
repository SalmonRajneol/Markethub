<html>
<head>
<title>Customer Update</title>
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
    
<h1>Customer Status</h1>
<p>&nbsp;</p>
<?php
include 'connect.php';

// Check if variables are set
if(isset($_REQUEST["custFirst"]) && isset($_REQUEST["custLast"]) && isset($_REQUEST["custAddress"]) && isset($_REQUEST["custCity"]) && isset($_REQUEST["custState"]) && isset($_REQUEST["custZip"]) && isset($_REQUEST["custEmail"]) && isset($_REQUEST["custPhone"])){

  // Get values from request
  $custFirst = $_REQUEST["custFirst"];
  $custLast = $_REQUEST["custLast"];
  $custAddress = $_REQUEST["custAddress"];
  $custCity = $_REQUEST["custCity"];
  $custState= $_REQUEST["custState"];
  $custZip = $_REQUEST["custZip"];
  $custEmail = $_REQUEST["custEmail"];
  $custPhone = $_REQUEST["custPhone"];
  $dt = date('Y-m-d');

  // Build query
  $query = "INSERT INTO custTab VALUES (
    null,
    '$custLast',
    '$custFirst',
    '$custAddress',
    '$custCity',
    '$custState',
    '$custZip',
    '$custEmail',
    '$custPhone',
    '$dt',
    null
  )";

  // Execute query
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  // Display success message
  print "<h3>Thanks $custFirst $custLast for entering your information</h3>";

} else {
  // Display error message if variables are not set
  echo "Error: Required variables are not set.";
}

?>
<p><a href="Customer_Entry.html">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
