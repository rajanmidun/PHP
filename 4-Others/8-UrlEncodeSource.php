<!DOCTYPE html>
<html>
<head>
	<title>Url Encode</title>
</head>
<body>
<?php
/*The urlencode() function is an inbuilt function in PHP which is used to encode the url. This function returns a string which consist all non-alphanumeric characters except -_. and replace by the percent (%) sign followed by two hex digits and spaces encoded as plus (+) signs. */
   $string= "Rajan & Raghav";
?>

<a href="UrlEncodeDestination.php?name=<?php echo $string ?>">Without UrlEncode</a>
<a href="UrlEncodeDestination.php?name=<?php echo urlencode($string) ?>">With UrlEncode</a>
</body>
</html>