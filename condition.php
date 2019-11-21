<!DOCTYPE html>
<html>
<head>
	<title>condition example</title>
</head>
<body bgcolor="#12344;">
<center><div style="border: 1px solid black;height: 300px;width: 200px;border-radius: 20px; background-color: skyblue;">
<br><br>
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
		break;}

 echo "</p>";
?>
<br><br><br><br><a href="index.php"> <button style="font-size: 20px;border-radius: 12px;"> Back</button></a> 
</div></center>

</body>
</html>
