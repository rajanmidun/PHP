<!DOCTYPE html>
<html>
<head>
	<title>Switch in PHP</title>
</head>
<body>
 <?php
     $index=1;
     $first=34;
     $second=5;
     switch ($index) {
     	case 0:
     		echo "Sum is ".($first+$second);
     		break;
     	
     	case 1:
     		echo "Subtract is ".($first-$second);
     		break;
     	default:
     	    echo "Please select onlt 0 and 1";
     }
 ?>
</body>
</html>