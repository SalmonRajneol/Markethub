<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sign change</title>
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
    
    
<p>Change the Sign</p>

<p>
  <?php 

function signChange ($changeIt) {
$changeIt = $changeIt * -1;
return $changeIt;
} // end function

$changeIt = $_REQUEST['changeIt'];

$newNum = signChange($changeIt);
print "<h3>The new number is: $newNum</h3>";
	

?>
</p>
<p><a href="signchange.php">Return</a></p>
</body>
</html>
