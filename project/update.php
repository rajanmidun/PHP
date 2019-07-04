<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <!--jquery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!--latest compiiled javascript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

      <a class="navbar-brand" href="#"><img src="pics/log.png" width="70px" height="18px"/>Maestro</a>
      <button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#myNavbar">
        <!--&#9776;--><span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li> <!--class="active" for selecting current page-->

                    <li><a href="#">Contact</a></li>
                    <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                        </ul>
                    </li>-->
                    
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

                </div>
                

  </div>
</nav>
<body>
    <?php
    $id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","mydb");
$sql="SELECT * from user where id='$id'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  $row=mysqli_fetch_assoc($result);

    echo $row['id']."<br/>";
    echo $row['Username']."<br/>";
    echo $row['Lastname']."<br/>";
    echo $row['Firstname']."<br/>";
      echo $row['Email']."<br/>";
      echo $row['Password']."<br/>";
      echo $row['Birthday']."<br/>";
      echo $row['Gender']."<br/>";
      echo $row['Country']."<br/>";

    }
  // Free result set
  mysqli_free_result($result);

mysqli_close($conn);
?>

<div class="container-fluid h h3">JOIN US</div>
<div class="form">
<form action="upback.php" method="post">
    <label for="id"><b>id</b></label><br />
    <input type="text" id="id" name="id" value="<?php echo $_GET['id']?> " readonly>
    <br/>
Firstname<br />
<input type="text" name="firstname" value="<?php echo $row['Firstname']?>"/>Last name<br />
<input type="text" name="lastname" value="<?php echo $row['Lastname']?>"/>Email name<br />
<input type="email" name="Email" value="<?php echo $row['Email']?>"/>Choose your username<br />
<input type="text" name="username" value="<?php echo $row['Username']?>"/>Password<br />
<input  type="password" name="password" value="<?php echo $row['Password']?>"/><br />


<input type="submit" value="submit"/></form>
</div>
    
</body>
</html>
