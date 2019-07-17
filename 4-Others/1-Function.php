<!DOCTYPE html>
<html>
<head>
	<title>Function in Php</title>
</head>
<body>
 <?php
    //simple function
    function displayName(){
    	echo "Rajan Midun Magar"."<br>";
    }
    //function with argument
    function sum($value1,$value2){
    	echo $value1+$value2."<br>";
    }
    //value returned by the function
    function mathOperations($first,$second){
    	return $first*$second;
    }
    //function returning two value
    function returnTwo(){
    	$sum=45+56;
    	$subtract=45-34;
    	return array($sum,$subtract);
    }
    //function having default value
    function defaultValue($name="Rajan"){
          echo "Hello {$name}, K cha!!"."<br>";
    }
    //
    //function calling 
    displayName();
    sum(3,4);
    $result=mathOperations(3,4);
    echo "Multiplication ".$result."<br>";
    $multiple=returnTwo();
    echo "Sum: ".$multiple[0]."<br>";
    echo "Subtract: ".$multiple[1]."<br>";
    defaultValue();
    defaultValue("Magar");
 ?>
</body>
</html>