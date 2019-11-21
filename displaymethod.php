
<?php
if (isset($_REQUEST["name"] )|| isset( $_REQUEST["age"]) || isset($_REQUEST['pass'])) 
	if (preg_match("/[^A-Za-z'-]/",$_REQUEST['pass'] )){
	 
		

 	echo "welcome".$_REQUEST['name']."<br>";
 	echo "You Are ".$_REQUEST['age']." Years old<br>";
	echo "password".$_REQUEST['pass']."This is unsecured";
	}
	else{

		die ("invalid name and name should be alpha");

}

	?>
<center>	<a href="index.php"> <button style="font-size: 20px;border-radius: 12px;margin-left: 60px;margin-top: 300px; color: blue; "> Back</button></a></center>
