<!DOCTYPE html>
<html>
<head>
	<title>Associative Array</title>
</head>
<body>
<?php
$keyValue=array(1=>"Rajan",2=>"Raghav");
$other=array(array(1=>"Rajan","email"=>"rajan@gmail.com"),
             array(2=>"Raghav","email"=>"raghav@gmail.com"));
foreach($keyValue as $key=>$value)
{
   echo $key." ".$value."<br />";	
}
$j=1;
for($i=0;$i<2;$i++){
    echo $other[$i][$j]."=>".$other[$i]["email"]."<br>";
    $j+=1;
  }
?>
</body>
</html>