<!DOCTYPE html>
<html>
<head>
	<title>Html Special Character</title>
</head>
<body>
 <a href="https://www.google.com/">
 	<?php
        $string="<Click Me";
        echo htmlspecialchars($string);
 	?>
 </a>
</body>
</html>