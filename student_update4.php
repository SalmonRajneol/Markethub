<?php 


// include the connection streamm
include 'connect.php';

$action = $_REQUEST["action"];
if ($action == 'a') {
	$stuFirst = null;
	$stuLast = null;
	$stuAddress = null;
	$stuZip = null;
	$stuEnrollAge = null;
	$stuComment = null;
	$stuStatus = "f";
 } else {
	$id = $_REQUEST["id"];
	 	$query = "select * from studentTab where stuID = $id";
		$result = mysqli_query($conn, $query)
			or die(mysqli_error());
		$row = mysqli_fetch_assoc($result);
		$stuFirst = $row['stuFirst'];  
		$stuLast = $row['stuLast'];  
		$stuAddress = $row['stuAddress'];  
		$stuZip = $row['stuZip'];
		$stuEnrollAge = $row['stuEnrollAge'];
		$stuComment = $row['stuComment'];
		$stuStatus = $row['stuStatus'];
} // end if

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Student Entry 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<h1>Please Enter Student Information</h1>
<form action="student_action4.php" method="get" name="form1" >
  <table width="59%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="28%"><font size="4">First Name</font></td>
      <td width="72%"><input name="stuFirst" type="text" id="stuFirst" value="<?php echo $stuFirst;?>" size="20" maxlength="20" required></td>
    </tr>
    <tr> 
      <td><font size="4">Last Name</font></td>
      <td><input name="stuLast" type="text" id="stuLast" value="<?php echo $stuLast;?>" size="25" maxlength="25" required></td>
    </tr>
    <tr> 
      <td><font size="4">Address</font></td>
      <td><input name="stuAddress" type="text" id="stuAddress" value="<?php echo $stuAddress;?>" size="35" maxlength="35" required></td>
    </tr>
    <tr> 
      <td><font size="4">Zip</font></td>
      <td><input name="stuZip" type="text" id="stuZip" value="<?php echo $stuZip;?>" size="8" maxlength="5" required></td>
    </tr>
    <tr>
      <td><font size="4">Status</font></td>
      <td><p>
        <label>
          <input name="stuStatus" type="radio" <?php if ($stuStatus == "f") {echo ' checked=checked ';} ?> value="f" >
          Full-Time</label>
        <br>
        <label>
          <input type="radio" name="stuStatus" <?php if ($stuStatus != "f") {echo ' checked=checked ';} ?> value="p" >
          Part-Time</label>
        <br>
      </p></td>
    </tr>
    <tr> 
      <td><font size="4">Age at Enrollment </font></td>
      <td><input name="stuEnrollAge" type="number" id="stuEnrollAge" value="<?php echo $stuEnrollAge;?>" size="5" maxlength="2" required></td>
    </tr>
    <tr> 
      <td><font size="4">Comment</font></td>
      <td><textarea name="stuComment" id="stuComment" cols="45" rows="3"><?php echo $stuComment;?></textarea></td>
    </tr>
    <tr> 
      <td>
      <!-- this bit of code passes the action and the id to the update program -->
      <!-- I use php to assign the proper values to each parm -->
     
      &nbsp;<input name="action" type="hidden" id="action" value="<?php echo $action;?>" />
      <input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><input type="submit" name="Submit" value="Submit">        </td>
    </tr>
  </table>
</form>
<p><a href="student_list4.php">Return </a></p>
</body>
</html>
