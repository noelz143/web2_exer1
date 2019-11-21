<?php
if (isset($_GET["name"] )|| isset( $_GET["age"]))

 {
 	echo "welcome".$_GET['name']."<br>";
 	echo "You Are ".$_GET['age']." Years old<br>";
	echo "password".$_GET['pass']."This is unsecured";
	# code...
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>getmethod</title>
</head>
<body>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         password: <input type="password" name="pass"/>
         <input type = "submit" value="submit" />
      </form>
<br><a href="index.php"> back</a>
</body>
</html>