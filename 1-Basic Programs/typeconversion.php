<!DOCTYPE html>
<html>
<head>
	<title>Type Conversion</title>
</head>
<body>
<?php
    //Example of Implicit Type Conversion
    $values="100";
    echo gettype($values)."<br>";
    $values=$values+12; //it will add the 100 to 12 and save the result as integer
    echo gettype($values)."<br>";
    $name="My rol no is ".$values;//it will concat string and int and save as string
    echo gettype($name)."<br>";

    //Example of Explicit type conversion
    $first="34";
    $second=(integer)$first;//instead of using (integer) you can use settype(variable name,"type to which you want to convert")
    echo gettype($second);
    
?>
</body>
</html>