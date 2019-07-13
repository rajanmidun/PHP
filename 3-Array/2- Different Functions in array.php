<!DOCTYPE html>
<html>
<head>
	<title>Functions in Arrays</title>
</head>
<body>
 <?php
    $values=array(1,2,3,4,5,6,7);
    //to count the no of element of arrays
    echo "Total No ".count($values)."<br>";

    //to sort the element in the arrays
    sort($values);
    print_r($values)." ";

    //reverse sort
    rsort($values);
    print_r($values);

    //to find the maximum value in the array
    echo "<br>"."Maximum Value".max($values)."<br>";

    //to find the minumum value in the array
    echo "Minimum Value ".min($values)."<br>";

    //custum seperator between the element in array
    $val=implode('-', $values);
    print_r($val);

    //to string string into array but separate each character by space
    $vowels="A E I O U";
    $vow=explode(" ", $vowels);
    print_r($vow);

    //check the element in the array
    echo "<br>".in_array(34,$values);
    echo "<br>".in_array(3,$values);
 ?>
</body>
</html>