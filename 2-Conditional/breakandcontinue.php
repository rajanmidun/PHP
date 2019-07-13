<!DOCTYPE html>
<html>
<head>
	<title>Break and Continue</title>
</head>
<body>
<?php
     //for continue
    echo "Using Continue"."<br>";
    $values=array(1,2,3,4,5,6,7,8,"Rajan",9,"Hari");
    foreach ($values as $val) {
    	if(gettype($val)=="string")
    		continue;
    	echo $val."<br>";
    }
    echo "<br>"."Using Break"."<br>";
    //for break
    foreach ($values as $val) {
    	if(gettype($val)=="string")
    		break;
    	echo $val."<br>";
    }

?>
</body>
</html>