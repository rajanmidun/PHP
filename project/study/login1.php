<html>
<head>
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<div class="navbar">


<div class="navheader"><div class="logo"><img src="logo.png" width="70px" height="50"/></div>Maestro</div>
<ul class="navul" id="qwe">

<li><a href="#">Home</a></li>
<li><a href="#">Login</a> </li>
            <li><a href="#">Register</a> </li>
            <li><a href="#">Contact</a> </li>
            <!--Comment-->
            
</ul><button class="icon" onclick="myFunction()">&#9776;</button>
</div>
<div class="form">
<form action="userinfo.php" method="post">
Username<br />
<input type="text" name="username"/><br />
Password<br />
<input type="password" name="password"/>
<br />
<input type="submit" value="Submit"/>
<div class="text">
<p>Don't have an Existing account?</p><input type="submit" value="Sign up"/>
</div>
</form>
</div>
<!--<div class="footer">
&copy Maestro</div>--></body>
<script>
function myFunction() {

     var x = document.getElementById("qwe");
    if( x.style.display == "none" || x.style.display == ""  )
        x.style.display = "block";
    else
        x.style.display = "none";
}
</script></html>