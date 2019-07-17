<!DOCTYPE html>
<html>
<head>
	<title>Destination</title>
</head>
<body>
  <?php
     $name=$_GET['name'];
     $address=$_GET['address'];
     $email=$_GET['email'];
     echo "Name: {$name}<br>";
     echo "Address: {$address}<br>";
     echo "Email: {$email}<br>";
  ?>
</body>
</html>