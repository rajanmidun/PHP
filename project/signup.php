<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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
                <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

        </div>

    </div>
</nav>


    <div class="container-fluid h h3">JOIN US</div>
    <div class="form">
        <form action="registered.php" method="post">
            Firstname<br />
            <input type="text" placeholder="John" name="firstname" />Last name<br />
            <input type="text" placeholder="Dalton" name="lastname" />Email name<br />
            <input type="email" placeholder="abc@gmail.com" name="Email" />Choose your username<br />
            <input type="text" placeholder="JohnDalton" name="username" />Password<br />
            <input type="password" name="password" />Birthday<br />
            <input type="date" name="birthday" max="2017-12-30" /><br/>
            <br/>Gender<br/>
            <input type="radio" name="gender" value="male" />Male<br />
            <input type="radio" name="gender" value="female" />Female<br />
            <div class="dropdown">
                <br/>Country<br />
                <div id="myDropdown" class="dropdown-content">
                    <!--<button class="btn btn-primary dropdown-toggle"
type="button" data-toggle="dropdown">Country
<span class="caret"></span></button>-->
                    <select name="country">
<option value="nepal">Nepal</option>
  <option value="india" >India</option>
  <option value="pakistan">Pakistan</option>
  <option value="china">China</option>
  </select>
                </div>
            </div>
            <input type="submit" value="Submit" /></form>
    </div>


</body>

</html>
