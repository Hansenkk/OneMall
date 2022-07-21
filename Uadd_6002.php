<?php
	$index = $_POST["index"];
	//echo $index;
	$name = $_POST["username"];
	$pwd = $_POST["psw"];
	$phone = $_POST["phone"];
	$role = $_POST["role"];
	//parse the file
	$fp=fopen("user.txt","a");
	fwrite($fp,$name.":".$pwd.":".$role.":".$phone."\n");
	fclose($fp);
	header('Location:/A3/Udelete_6002.php?index='.$index);
?>