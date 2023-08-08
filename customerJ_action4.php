<html>
<head>
<title>Customer Update 4</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Customer Status</h1>
<p>&nbsp;</p>
<?php 


// include the connection streamm
include 'connectYes.php';
 
// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];

//$Birth = $_REQUEST["cusYY"] - $_REQUEST["cusMM"] - $_REQUEST["cusDD"]

// if not delete, add fields
	// here are all the fields from my form

	if ($action != 'd') {
		$cusLast = $_REQUEST["cusLast"];  
		$cusFirst = $_REQUEST["cusFirst"];  
		$cusZip = $_REQUEST["cusZip"];
		$cusStreet = $_REQUEST["cusStreet"];  
		$cusSex = $_REQUEST["cusSex"];
		$cusSource = $_REQUEST["cusSource"];
		$cusAge = $_REQUEST["cusAge"];
		$cusMM = $_REQUEST["cusMM"];
		$cusDD = $_REQUEST["cusDD"];
		$cusYY = $_REQUEST["cusYY"];
		$cusBirth = "$cusYY-$cusMM-$cusDD";

		//$cusBirth = $_REQUEST["cusYY"] - $_REQUEST["cusMM"] - $_REQUEST["cusDD"];
        $cusComment = $_REQUEST["cusComment"];
	
	// the date function is used near the end to set the Added Date or changed date
	$dt = date('Y-m-d');
}


// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
	$query = "insert into cusTab values (
		null, 
		'$cusLast', 
		'$cusFirst', 
		'$cusZip', 
		'$cusStreet', 
		'$cusSex',
		'$cusSource', 
		'$cusAge', 
		'$cusBirth',
		'$cusComment', 
		'$dt',
		null
	)";
	mysqli_query($conn, $query)
	 or
		die(mysqli_error());
	print "<h3>Thanks $cusFirst for entering your information</h3>";

	print "<h3>Last inserted record has id  " . mysqli_insert_id($conn) . " </h3>";
} 


// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update cusTab
		set cusLast = '$cusLast',
		cusFirst = '$cusFirst', 
		cusZip = '$cusZip', 
		cusStreet = '$cusStreet', 
		cusSex = '$cusSex', 
		cusSource = '$cusSource', 
		cusAge = '$cusAge', 
		cusBirth = '$cusBirth',
		cusComment = '$cusComment',
		cusUpdated = '$dt'		
		where cusID = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u

if ($action == 'd') {

// this is a delete
// so perform a delete query
		$query = "delete from cusTab
		where cusID = '$id'";
		mysqli_query($conn, $query)
			 or die("query failed:" . mysqli_error());
	print "<h3>Delete Successful</h3>";
} 

?>

<p><a href="customerJ_list5.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
