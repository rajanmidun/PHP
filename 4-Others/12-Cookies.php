<!DOCTYPE html>
<html>
<head>
	<title>Cookies in PHP</title>
</head>
<body>
<?php
    //to set the cookie
    $name="rajan";
    $value="Rajan is my name yes";
    $period=time()+60*60*24*7;
    setcookie($name,$value,$period);

    //get the value of the cookies
    echo $_COOKIE['rajan'];

    //to unset the cookie
    setcookie($name,null,$period);
    echo $_COOKIE['rajan'];
?>
</body>
</html>