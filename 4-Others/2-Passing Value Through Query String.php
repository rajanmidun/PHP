<!DOCTYPE html>
<html>
<head>
	<title>Passing Value from Query String</title>
</head>
<body>
<?php
  $name="Rajan";
  $address="DhungeAdda";
  $email="rajan20540723@gmail.com";
  $info="name={$name} & address={$address} & email={$email}";

?>
<a href="Passing Value Through Query String dest.php?<?php echo $info; ?>">Click me to send data </a>
</body>
</html>