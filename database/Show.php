<?php
    $username = 'root';
    $dbname = 'projectdb';
    $pasword = '';
    $server = 'localhost';
    $con = mysqli_connect($server,$username,$pasword,$dbname);
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
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT firstname, lastname, email, password, address FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-striped"><tr>
                    <th>First Name  </th>
                    <th>Last Name  </th>
                    <th>Email  </th>
                    <th>Password </th>
                    <th>Address  </th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>';
  while($row = mysqli_fetch_assoc($result)){ 
    //Creates a loop to loop through results

    echo "<tr>";
                                
                                foreach($row as $val) {
                                    echo "<td>".$val."</td>";
                                }
                                echo '<td> <a href="update.php?email='.$row['email'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button></a></td>';
                                echo '<td> <a href="delete.php?email='.$row['email'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>';
                                echo "</tr>";
                            }
echo "</table>";
} else {
    echo '<table class="table table-striped"><tr>
                    <th>First Name  </th>
                    <th>Last Name  </th>
                    <th>Email  </th>
                    <th>Address  </th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>';
}

$conn->close();
?> 
</table>


</body>

</html>