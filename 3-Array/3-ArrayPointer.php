<!DOCTYPE html>
<html>
<head>
	<title>Array pointer in php</title>
</head>
<body>
<?php
$sum=0;
$array=array(1,2,3,4,5,6,7);
echo current($array)."<br>";
next($array);
echo current($array)."<br>";
end($array);
echo current($array)."<br>";
reset($array);
echo current($array)."<br>";

echo "Priniting using While Loop"."<br>";
while(current($array)!=null){
	echo current($array)."<br>";
	$sum+=current($array);
	next($array);
}
echo "Sum ".$sum;
?>
</body>
</html>