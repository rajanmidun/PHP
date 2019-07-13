<!DOCTYPE html>
<html>
<head>
	<title>Numeric Functions</title>
</head>
<body>
   <?php
     $number1=34;
     $number2=-67;
     echo abs($number2)."<br />";
     echo sqrt($number1)."<br />";
     echo pow($number1, 1)."<br />";
     echo ceil(45.4444)."<br />";
     echo floor(45.4444)."<br />";
     echo round(4.5555566,4)."<br />";
     echo is_int(45)."<br />";
     echo is_float(56)."<br />";
     echo is_numeric("dg")."<br />";
   ?>
</body>
</html>