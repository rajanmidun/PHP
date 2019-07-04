<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <!--jquery library-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!--latest compiiled javascript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
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
                    <li class="active"><a href="index.php">Home</a></li>

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
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

                </div>

  </div>
</nav>
    </body>


</html>
