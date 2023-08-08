<html>
<head>
<title>List of customers </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    
    
   <style>
body {
  background-image: url('https://images.unsplash.com/photo-1513023840371-dd774fcaee5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
		}
}
</style> 

<h1>List of customers</h1>
<p><br>
  <br>
  
  
<?php


// include the connection streamm
include 'connectYes.php';

$query = "select * from custTab";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";

while($row = mysqli_fetch_assoc($result)) {
	$custID = $row['custNo'];
	$custFirst = $row['custFirst'];
	$custLast = $row['custLast'];
	$custAddress = $row['custAddress'];
	$custZip = $row['custZip'];
	print "$custID $custFirst $custLast $custAddress $custZip ";
	print "<a href=cust_update3.php?action=u&id=";
	print $custID;
//  remove the <br> from this line	
	print ">Change</a><br>";	

}

?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="cust_update3.php?action=a">Add a customer</a>

<br>
<br>
<a href="index.html">Return </a>

</body>
</html>
