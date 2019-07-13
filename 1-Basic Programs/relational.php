<!DOCTYPE html>
<html>
<head>
	<title>Relational Operator</title>
</head>
<body>
  <?php
     $num1=23;
     $num2=45;
     if($num1==$num2)
     	echo "Both numbers are equal";
     elseif ($num1===$num2) {
     	echo "Both number are equal and identical";
     }
     elseif($num1!=$num2)
     {
       if($num1>$num2)
       	echo $num1." is greater than ".$num2;
       else
       	echo $num2." is greater than ".$num1;

     }
     else
     	echo "Error!!1";
     	
  ?>
</body>
</html>