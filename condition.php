<!DOCTYPE html>
<html>
<head>
	<title>condition example</title>
</head>
<body>
<?php 
$a = 5;
if ($a = 5) {
	echo "$a is less than 10";
	# code...
}
elseif ($a == 5) {
	echo "They are equal";
	# code...
}
else{
	echo "10 is greater than $a";
}
?>
<?php 
 echo "<p>";
$letter = 'a';

switch ($letter) {
	case 'a':
		echo "it is a";
		# code...
		break;
	
	case 'b':
		echo "it is b";
		# code...
		break;
	default:
		echo "Not in the list";
		# code...
		break;
}

 echo "</p>";
?>
<br><a href="index.php"> back</a>  

</body>
</html>