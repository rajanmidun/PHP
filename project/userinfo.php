<?php
session_start();

if(isset($_POST['username'])&& isset($_POST['password']))
{
    $uname=$_POST['username'];
    $pword=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","mydb");
    $log="select * from `user` WHERE `Username`='$uname' and `Password`='$pword'";
        $result=mysqli_query($conn,$log)or die(mysqli_error($conn));
    if(mysqli_num_rows($result)>0)
    {
     if($row=mysqli_fetch_assoc($result)){
                                $_SESSION['username']=$uname;
                                $_SESSION['id']=session_id();
                                header("location:userinfo.php");
                             }
                            else
                            {
                                echo "Invalid";
                                }
                                           }
                                           }
?>
<!DOCTYPE HTML>
<html><head>
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <!--jquery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!--latest compiiled javascript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

      <a class="navbar-brand img-responsive" href="#"><img src="pics/log.png" width="70px" height="18px"/>Maestro</a>
      <button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#myNavbar">
        <!--&#9776;--><span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Contact</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                        </ul>
                    </li>
                    
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>

                </div>

  </div></div>
</nav>
</head><body>
<?php
$conn=mysqli_connect("localhost", "root", "","mydb"); 
$result = mysqli_query($conn,"select * from user")or die(mysqli_error($conn));
echo "<div class='container-fluid'>";
echo "<table class='table-bordered table-hover table-striped text-center table-responsive'><thead><tr><th>S.N</th><th>Firstname</th><th>Lastname</th><th>Username</th><th>Password</th><th>Email</th><th>Birthday</th><th>Gender</th><th>Country</th><th colspan='2'>Action</th></tr></thead>";

while($row = mysqli_fetch_assoc($result)){ 
    //Creates a loop to loop through results

    echo "<tr>";
                                
                                foreach($row as $val) {
                                    echo "<td>".$val."</td>";
                                }
                                echo '<td> <a href="update.php?id='.$row['id'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</button></a></td>';
                                echo '<td> <a href="delete.php?id='.$row['id'].'"><button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>';
                                echo "</tr>";
                            }
echo "</table>";
mysqli_close($conn); //Close the table in HTML
?>
DONE
</div>
</body></html>