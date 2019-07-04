<?php
$conn=mysqli("localhost","root","","table1");
echo "<b>".$_POST['username']."</b>"."<br />";
echo "<b>".$_POST["pwd"]."<b>"."<br />";

echo "<b>".$_POST["gender"]."<b>"."<br />";

echo $_POST["country"]."<br />";



?>