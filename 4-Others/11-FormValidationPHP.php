<!DOCTYPE html>
<html>
<head>
	<title>Validate</title>
</head>
<body>
<?php
   if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        if(strlen($name)<6){
           echo "username too small";
        }
        elseif (!is_numeric($age)) {
           echo "Age must be numberic";
        }
        elseif (empty($email)) {
           echo "Email must be valid";
        }
        else{
          echo "Form submitted with following data!!!"."<br>";
          echo "Name ".$name."<br>";
          echo "Age ".$age."<br>";
          echo "Gender ".$gender."<br>";
          echo "Email ".$email."<br>";
        }
   }
   else{
   	echo "Form is not Filled Properly";
   }
?>
</body>
</html>