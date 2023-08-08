<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Convert Temperature</title>
</head>
<body>
    
    <style>
body {
  background-image: url('https://imgs.search.brave.com/W5aqvQP3lFVsK00P6dnyrI_dma614wYDTDhMZhMe_bw/rs:fit:1200:1080:1/g:ce/aHR0cHM6Ly9pbWFn/ZXM2LmFscGhhY29k/ZXJzLmNvbS85MTAv/dGh1bWItMTkyMC05/MTA2MzAuanBn');
  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
		}
}
</style>
    
<p>Temperature Conversion</p>
<p>
<?php
$temp = $_GET["temp"];
$type = $_GET["type"];
if( $type == "f")
printf("You converted $temp Celcius to ". number_format((float)((9 * $temp) / 5 + 32),2, '.', '') ." Fahrenheit <br>");
else
printf("You converted $temp Fahrenheit to ". number_format((float)(($temp - 32) * 5/9), 1, '.','') ." Celcius <br>");
?>
</p>
<p><a href="tempcnvtr.php">Return</a></p>
</body></html>