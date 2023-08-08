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
include 'connect.php';
// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];
// here are all the fields from my form
if ($action != 'd') {
$custFirst = $_REQUEST["custFirst"];
$custLast = $_REQUEST["custLast"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZip"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];
}
// the date function is used near the end to set the Added Date or changed date
$dt = date('Y-m-d');
// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
$query = "insert into custTab values (
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
mysqli_query($conn, $query) or
die(mysqli_error());
print "<h3>Thanks $custFirst for entering your information</h3>";
}
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field
if ($action == 'u') {
$query = "update custTab
set custFirst = '$custFirst',
custLast = '$custLast',
custAddress = '$custAddress',
custZip = '$custZip',
custState = '$custState',
custEmail = '$custEmail',
custPhone = '$custPhone',
custCity = '$custCity',
custChangeDate = '$dt'
where custNo = '$id'";
mysqli_query($conn, $query) or
die(mysqli_error());
print "<h3>Update Successful</h3>";
} // end u
if ($action == 'd') {
// this is a delete
// so perform a delete query
$query = "delete from custTab
where custNo = '$id'";
mysqli_query($conn, $query)
or die("query failed:" . mysqli_error());
print "<h3>Delete Successful</h3>";
}

?>
<p><a href="index.html">Return</a></p>
<p>&nbsp; </p>
</body>
</html>