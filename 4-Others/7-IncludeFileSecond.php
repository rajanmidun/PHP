<!DOCTYPE html>
<html>
<head>
	<title>Include File </title>
</head>
<body>
<?php
   function area($radius){
     define('PI',pi());
     return PI*pow($radius, 2);
   }
?>
</body>
</html>