<html>
<head>
<title>Student Update 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Student Status</h1>
<p>&nbsp;</p>
<?php 


// include the connection streamm
include 'connect.php';
 
// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];

// here are all the fields from my form
// non delete only

if ($action != 'd') {
	$stuFirst = $_REQUEST["stuFirst"];
	$stuLast = $_REQUEST["stuLast"];
	$stuAddress = $_REQUEST["stuAddress"];
	$stuZip = $_REQUEST["stuZip"];
	$stuStatus = $_REQUEST["stuStatus"];
	$stuEnrollAge = $_REQUEST["stuEnrollAge"];
	$stuComment = $_REQUEST["stuComment"];

	// the date function is used near the end to set the Added Date or changed date
	$dt = date('Y-m-d');
}

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
	$query = "insert into studentTab values (
		null, 
		'$stuFirst', 
		'$stuLast', 
		'$stuAddress', 
		'$stuZip', 
		'$stuStatus', 
		'$stuEnrollAge', 
		'$stuComment', 
		'$dt',
		null
	)";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Thanks $stuFirst for entering your information</h3>";
} 
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update studentTab
		set stuFirst = '$stuFirst',
		stuLast = '$stuLast', 
		stuAddress = '$stuAddress', 
		stuZip = '$stuZip', 
		stuStatus = '$stuStatus', 
		stuEnrollAge = '$stuEnrollAge', 
		stuComment = '$stuComment',
		stuDateChanged = '$dt'		
		where stuID = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u

if ($action == 'd') {

// this is a delete
// so perform a delete query
		$query = "delete from studentTab
		where stuID = '$id'";
		mysqli_query($conn, $query)
			 or die("query failed:" . mysqli_error());
	print "<h3>Delete Successful</h3>";
} 

?>

<p><a href="student_list4.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
