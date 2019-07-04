<?php
$uname=$_POST['username'];
$pname=$_POST['password'];
$email=$_POST['Email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$conn=mysqli_connect("localhost","root","","mydb");
$sql="insert into user (Firstname,Lastname,Email,Username,Password,Birthday,Gender,Country)
values('$firstname','$lastname','$email','$uname','$pname','$birthday','$gender','$country')";
if(mysqli_query($conn,$sql)or die(mysqli_error))
{
echo "done";
}
else{
    echo "error";
}
?>