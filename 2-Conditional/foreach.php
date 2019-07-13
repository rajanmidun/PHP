<!DOCTYPE html>
<html>
<head>
	<title>For each</title>
</head>
<body>
<?php
$values = array(1,2,3,4,5,6);
$total=0;
// Loop through colors array
foreach($values as $value){
	$total+=$value;
}
echo "Total ".$total;
?>
</body>
</html>