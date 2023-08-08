<html>
<head>
<title>List Customers 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>List Customers</h1>
<p><br>
<br>
<?php
// include the connection streamm
include 'connect.php';
// the customer file is sorted last name, first name
$query = "select * from custTab order by custLast, custFirst";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";
print "<table>";
print "<tr><td><b>First Name</b></td>";
print "<td><b>Last Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>City</b></td>";
print "<td><b>Delete</td></b></tr>";
while($row = mysqli_fetch_assoc($result)) {
$custNo = $row['custNo'];
$custFirst = $row['custFirst'];
$custLast = $row['custLast'];
$custAddress = $row['custAddress'];
$custCity = $row['custCity'];
print "<tr>";
print "<td>$custFirst</td>";
print "<td>$custLast</td>";
print "<td>$custAddress</td>";
print "<td>$custCity</td>";
print "<td><a href=customer_update4.php?action=u&id=";
print $custNo;
print ">Change</a></td>";
print "<td><a href=customer_action4.php?action=d&id=";
print $custNo;
print "> Delete </a></td>";
print "</tr>";
}
print "</table>";
?>
</p>
<label></label>
<br>
<a href="customer_update4.php?action=a">Add a Customer</a>
<br>
<br>
<a href="index.html">Return </a>
</body>
</html>