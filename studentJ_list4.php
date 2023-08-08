<html>
<head>
<title>List Students 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Students</h1>
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
$condition = " and (stuLast like '%$searchName%' )";

// the student file is sorted last name, first name
// add condition for name search
$query = "select * from stuTab, majorTab where stuMajorID = majorID $condition order by stuLast, stuFirst";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
print "There are currently $num students on file<br><br>"; // rows selected
 
print "<table>";
print "<tr><td><b>Last Name</b></td>";
print "<td><b>First Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Major</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";

while($row = mysqli_fetch_assoc($result)) {
	$stuID = $row['stuID'];
	$stuFirst = $row['stuFirst'];
	$stuLast = $row['stuLast'];
	$stuAddress = $row['stuAddress'];
	$stuZip = $row['stuZip'];
	$majorName = $row['majorName'];
	
	print "<tr>";
	print "<td>$stuLast</td>";
	print "<td>$stuFirst</td>";
	print "<td>$stuAddress</td>";
	print "<td>$majorName</td>";
	print "<td><a href=studentJ_update4.php?action=u&id=";
	print $stuID;
	print ">Change</a></td>";	
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
	print "<td><a href=studentJ_action4.php?action=d&id=";
	print $stuID;
	print "> Delete </a></td>";	
	print "</tr>";
}
print "</table>";
?>
</p>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="studentJ_update4.php?action=a">Add a Student</a>

<br><br>

<!--  this recalls the page - now holding any search criteria entered  -->
<form id="form" name="form" method="get" action="studentJ_list4.php">  
  <input name="searchName" type="text"  id="searchName" size="25" maxlength="25" />
  <input name="button" type="submit"  id="button" value="Search" />
  &nbsp;&nbsp; search for any part of Last Name
</form> 

<br> 

<!-- this recalls the page with no search selected  -->
<input type=button onClick="parent.location='studentJ_list4.php'" value='Return All'>

<br><br>

<a href="index.html">Return </a>

<br>
</body>
</html>
