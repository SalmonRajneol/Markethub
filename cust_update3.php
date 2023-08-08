<?php
include 'connect.php';
$action = $_REQUEST["action"];
if ($action == 'a') {
$custFirst = null;
$custLast = null;
$custAddress = null;
$custCity = null;
$custState = null;
$custZip = null;
$custEmail = null;
$custPhone = null;
} else {
$id = $_REQUEST["id"];
$query = "select * from custTab where custNo = $id";
$result = mysqli_query($conn, $query)
or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
$custFirst = $row['custFirst'];
$custLast = $row['custLast'];
$custAddress = $row['custAddress'];
$custCity = $row['custCity'];
$custState = $row['custState'];
$custZip = $row['custZip'];
$custEmail = $row['custEmail'];
$custPhone = $row['custPhone'];
} // end if
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Customer Entry 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
    
<h1>Please Enter Customer Information</h1>
<form action="customer_action3.php" method="get" name="form1" >
<table width="59%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="28%"><font size="4">First Name</font></td>
<td width="72%"><input name="custFirst" type="text" id="custFirst" value="<?php echo $custFirst;?>" size="25" maxlength="25"></td>
</tr>
<tr>
<td><font size="4">Last Name</font></td>
<td><input name="custLast" type="text" id="custLast" value="<?php echo $custLast;?>" size="20" maxlength="20"></td>
</tr>
<tr>
<td><font size="4">Address</font></td>
<td><input name="custAddress" type="text" id="custAddress" value="<?php echo $custAddress;?>" size="40" maxlength="40"></td>
</tr>
<tr>
<td><font size="4">City</font></td>
<td><input name="custCity" type="text" id="custCity" value="<?php echo $custCity;?>" size="15" maxlength="15"></td>
</tr>
<tr>
<td><font size="4">State</font></td>
<td><p>
<label>
<input type="radio" name="custState" <?php if ($custState == "MA") {echo ' checked=checked ';} ?> value="MA" >
MA</label>
<br>
<label>
<input type="radio" name="custState" <?php if ($custState == "NH") {echo ' checked=checked ';} ?> value="NH" >
NH</label>
<br>
<label>
<input type="radio" name="custState" <?php if ($custState == "RI") {echo ' checked=checked ';} ?> value="RI" >
RI</label>
<br>
</p></td>
</tr>
<tr>
<td><font size="4">Zip</font></td>
<td><input name="custZip" type="text" id="custZip" value="<?php echo $custZip;?>" size="8" maxlength="5"></td>
</tr>
<tr>
<td><font size="4">Email</font></td>

<td><input name="custEmail" type="text" id="custEmail" value="<?php echo $custEmail;?>" size="40" maxlength="40"></td>
</tr>
<tr>
<td><font size="4">Phone</font></td>
<td><input name="custPhone" type="text" id="custPhone" value="<?php echo $custPhone;?>" size="10" maxlength="10"></td>
</tr>
<tr>
<td>
<script type="text/javascript">
$('form input[type=submit]')
.before('<div>Are you a human? <input type="checkbox" name="captcha" /></div>');
</script>
</td>
</tr>
<tr>
<td>
<!-- this bit of code passes the action and the id to the update program -->
<!-- I use php to assign the proper values to each parm -->
&nbsp;<input name="action" type="hidden" id="action" value="<?php echo $action;?>" />
<input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
<td><input type="submit" name="Submit" value="Submit"> </td>
</tr>
</table>
</form>
<p><a href="customer_list3.php">Return </a></p>
</body>
</html>