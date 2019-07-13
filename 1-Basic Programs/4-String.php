<!DOCTYPE html>
<html>
<head>
	<title>String in PHP</title>
</head>
<body>
<?php
    $name="Rajan Midun";
    $address="Kathmandu";

    //concatinate two string in php
    $concatString=$name." ".$address;
    echo nl2br($concatString);
    echo "<br />";

    //to uppercase
    $upperCasee=strtoupper($name);
    echo $upperCasee;
     echo "<br />";

    //to lowercase
    $lowerCasee=strtolower($name);
    echo $lowerCasee;
     echo "<br />";

     //to first letter captital
    $ucCasee=ucwords($name);
    echo $ucCasee;
    echo "<br />";

    //length of the string
    $leng=strlen($name);
    echo $leng;
    echo "<br />";

    //replace the word of the string
    $replaceWord=str_replace("Rajan", "Raju", $name);
    echo $replaceWord;
    echo "<br />";


    //repeat the string many times
    $repeat=str_repeat($name, 4);
    echo $repeat;
    echo "<br />";

    //get the part of larger string
    $subString =substr($name ,4,9);
    echo $subString;
    echo "<br />";

    //check the  word present in the string or not
    echo strstr($name, "Midun");
    echo "<br />";

    //check the position of word in line
    echo strpos($name, "Midun");
    echo "<br />";

    //check the position of character
    echo strchr($name ,'a');
    echo "<br />";



?>
</body>
</html>