<?php

$conn = new mysqli("localhost", 'root', "", "projectdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['firstname'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password=$_POST['password'];
    $address=$_POST['address'];
     $email=$_POST['email'];
$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname',password='$password', address='$address' WHERE email='$email'";
$run = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if ($run) {
    header("location:show.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
input[type=text]{
    width: 50%;
    color:red;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input[type=password]{
    width: 50%;
    color:#3D9970;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.di {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
b
{
    font-family: cursive;
    color:#001f3f;
    font-size:18px;
}
p
{
    font-family: cursive;
    color:#001f3f;
    font-size:14px;
}
</style>

<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="#">DATABASE</a>
      <button type="button" class="navbar-toggle glyphicon glyphicon-th-list" data-toggle="collapse" data-target="#myNavbar">

      </button>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="show.php">View</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul> 

            </div>
    
  </div>
  </nav>
  <center><h1>Update</h1></center>
  <div class="di">
  <form  method="post" action="update.php" align="center" > 
  <input type="text" id="email" name="email" value="<?php echo $_GET['email']?> " readonly><br />
    <label for="fname"><b>First Name</b></label><br />
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">
    <br />
    <label for="lname"><b>Last Name</b></label><br />
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
    <br />
    <label for="add"><b>Password</b></label><br />
    <input type="password"  id="password"  name="password" placeholder="Your password..">
    <br /> 
    <label for="add"><b>Address</b></label><br />
    <input type="text"  id="address"  name="address" placeholder="Your address..">
    <br /> 
    <input type="submit" value="Update" />
  </form>
</div>
  


</body>

</html>
