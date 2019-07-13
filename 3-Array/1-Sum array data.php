<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php
    $array1=array(1,2,3,4,5,6,7,8,9);
    $length=count($array1);
    $total=0;
    for ($i=0; $i <$length ; $i++) { 
    	$total+=array1[$i];
    }
    echo $array1[0]."<br />";
    print_r($total)."<br />";
?>
</body>
</html>