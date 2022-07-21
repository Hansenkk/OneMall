<?php
    //get the form
	$name = $_POST["username"];
	$pwd = $_POST["pwd"];
	$phone = $_POST["phone"];
	//parse the file
	$fp=fopen("user.txt","a");
	fwrite($fp,$name.":".$pwd.":Customer:".$phone."\n");
	fclose($fp);
	
	echo "<p>User regist successfully!</p><br>";
	echo "<p>Please login!";
	
?>