<?php
$email=$_GET['email'];
$conn = mysqli_connect("localhost","root","","projectdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "DELETE FROM users where email='$email'";


if (mysqli_query($conn, $sql)) {
    header("location:show.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>