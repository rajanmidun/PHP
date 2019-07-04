<?php
$id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","mydb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM user where id='$id'";
if (mysqli_query($conn,$sql)) {
    header("location:userinfo.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>