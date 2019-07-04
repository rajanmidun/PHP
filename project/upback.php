<?php
$uname=$_POST['username'];
$pname=$_POST['password'];
$email=$_POST['Email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$id=$_POST['id'];
    $conn=mysqli_connect("localhost","root","","mydb");
    $sql = "UPDATE user set Firstname='$firstname',Username='$uname',Password='$pname',Email='$email',Lastname='$lastname' where id='$id'";
    if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    header("location:userinfo.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>