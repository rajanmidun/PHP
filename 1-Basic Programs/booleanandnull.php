<!DOCTYPE html>
<html>
<head>
	<title>Boolean and Null</title>
</head>
<body>
   <?php
      //for boolean
      $first=true;
      $second=false;
      echo is_bool($first)."<br>";
      echo "First ".$first."<br>";
      echo "Second".$second."<br>";

      //for null
      $third=null;
      echo "Null value".$third."<br>";
      echo is_null($third)."<br>";
      echo empty($third);
      //empty will check whether the given value is null or 0
   ?>
</body>
</html>