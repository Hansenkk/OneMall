<?php
	//WRITTEN BY: Fangheng Liu
    //get the form
	$name = $_POST["user"];
	$pwd = $_POST["psw"];
	$role = $_POST["role"];
	//echo $name;
	//echo $pwd;
	//echo $role;
	//parse the file
	$f_arr=file("user.txt");
	$user_pwd = array();
	$role_arr = array();
	$index = true;
	foreach($f_arr as $cont){
		$s_arr = preg_split("/:/",$cont);
		//echo $s_arr[0];
		//echo $s_arr[1];
		//echo $s_arr[2];
		if(strncmp($name,$s_arr[0],2)==0 
			&& strncmp($pwd,$s_arr[1],2)==0
			&& strncmp($role,$s_arr[2],2)==0){
			echo ("yes");
			if(strncmp($role,"Customer",2)==0){
				setcookie("username",$name);
				$uri .= $_SERVER['HTTP_HOST'];
				header('Location:/A3/index_5067.html');
				$index = false;
				break;
			}
			if(strncmp($role,"Admin",2)==0){
				$uri .= $_SERVER['HTTP_HOST'];
				header('Location:/A3/Ulist_9518.php');
				$index = false;
				break;
			}
		}
	}
	if($index){
		echo "<p>Username or Password are not correct!</p><br>";
		echo "<p>Please go back!";
	}
?>