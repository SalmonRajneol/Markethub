<html>
<head>
<title>List Customers </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>
<p><br>
  <br>
  
  
  <?php

// include the connection streamm
include 'connect.php';

// read search name if selected
// else set to null
if (isset($_REQUEST["searchName"])) {
    $searchName = $_REQUEST["searchName"] ; 
} else {
$searchName = null; }
//print "see search name $searchName";  // test selection technique

// set condition for search
$condition = " and (cusLast like '%$searchName%' )";

// write a query
$query = "SELECT * FROM cusTab, srcTab where cusSource = srcID $condition order by cusLast, cusFirst";
//$query = "select * from Country";

// execute the query using a php function
$result = mysqli_query($conn, $query);


// start a table
echo "<table cellpadding=\"5\" cellspacing=\"3\" border=\"0\">" ;
// print headings
echo "<tr bgcolor=\"#cccccc\"><td><b><u>ID</b></u></td><td><u>First Name</u></td><td><u>Last Name</u></td><td><u>Street</u></td><td><u>City</u></td><td><u>Source</u></td><td colspan=2 align=center><u>Action</u></td></tr>";

// use while loop and function to retrieve all rows
while ($row = mysqli_fetch_assoc($result)) {
	$cusID = $row['cusID'];
	$cusFirst = $row['cusFirst'];
	$cusLast = $row['cusLast'];
	$cusStreet = $row['cusStreet'];
	$cusZip = $row['cusZip'];
	$srcName = $row['srcName'];
	

	echo "<tr><td><b>$cusID</b></td>";
	echo "<td>$cusFirst</td>";
	echo "<td>$cusLast</td>";
	echo "<td>$cusStreet</td>";
	echo "<td>$cusZip</td>";
	echo "<td>$srcName</td>";
		
	echo "<td><a href=\"customerJ_update4.php?action=u&id=";
	echo $cusID;
	echo "\">Change</a></td>";	
	echo "<td><a href=\"customerJ_action4.php?action=d&id=";
	echo $cusID;
	echo "\">Delete</a></td></tr>";	
	
}
// close table
echo "</table>";

?>
<br><br>
<a href="customerJ_update4.php?action=a">Add a Customer</a>
<br><br>

<!--  this recalls the page - now holding any search criteria entered  -->
<form id="form" name="form" method="get" action="customerJ_list5.php">  
  <input name="searchName" type="text"  id="searchName" size="25" maxlength="25" />
  <input name="button" type="submit"  id="button" value="Search" />
  &nbsp;&nbsp; search for any part of Last Name
</form> 

<br> 

<!-- this recalls the page with no search selected  -->
<input type=button onClick="parent.location='customerJ_list5.php'" value='Return All'>
<p><a href="index.html">Return </a></p>
</body>
</html>
