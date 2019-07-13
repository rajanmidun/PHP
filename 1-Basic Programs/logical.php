<!DOCTYPE html>
<html>
<head>
	<title>Logical Operator in PHP</title>
</head>
<body>
<?php
    $num1=346;
    $num2=5443;
    if(($num1%2==0) && ($num2%2==0))
    	echo "Both numbers are divisible by 2";
    else if(($num1%2==0) || ($num2%2==0)){

    	if($num1%2==0)
    		echo "$num1 is divisible by 2";
    	else
    		echo "$num2 is divisible by 2";
    }
    else
    	echo "Both numbers aren't divisible by 2";
?>
</body>
</html>