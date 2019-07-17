<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		#form{
             background-color: skyblue;
             padding:10px;
             margin:auto;
             width: 300px;
		}
		#name, #age,#gender,#email{
			padding: 5px;
			margin: 10px;
		}
		#name{
            margin-left: 20px;
		}
		#age{
            margin-left: 30px;
		}
		#email{
			margin-left:18px;
		}

	</style>
</head>
<body>
  <form action="FormValidationPHP.php" method="post" id="form">
  	<div>
  		<b>Name:</b> <input type="text" name="name" id="name" required>
  	</div>
  	<div>
  		<b>Age:</b> <input type="text" name="age" id="age" required>
  	</div>
  	<div>
  		<b>Gender:</b> <input type="radio" name="gender" value="male" id="male"><b>Male</b>
  		        <input type="radio" name="gender" id="female" value="female"><b>Female</b>
  	</div>
  	<div>
  		<b>Email:</b> <input type="text" name="email" id="email" required>
  	</div>
  	<div>
  		<input type="Submit" name="submit">
  	</div>
  </form>
</body>
</html>