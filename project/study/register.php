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
<div class="container">
<form method="post" action="success.php">
<div class="form-group">
<label for="username">Username</label>
<input type="username" class="form-control" id="username" name="username"/>
</div>
<div class="form-group">
<label for="pwd">Password</label>
<input type="password" class="form-control" id="pwd" name="pwd"/>
</div>
<label for="gender">Gender</label>
<div class="radio">
  <label for="gender"><input type="radio" value="male" name="gender"/>Male</label>
  <label for="gender"><input type="radio" value="female" name="gender"/>Female</label>
  <label for="gender"><input type="radio" value="other"name="gender"/>Other</label>
</div>
<div class="form-group">
  <label for="contry">Country</label>
  <select class="form-control" id="country" name="country">
    <option>Nepal</option>
    <option>India</option>
    <option>China</option>
    <option>Pakistan</option>
  </select>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div></body>
