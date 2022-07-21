<!-- written by: Tianfei Qi, id: 40079518 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We-Mall Users Profile</title>
    <link rel="stylesheet" href="./css/P10_9518.css">
</head>
<body>
    <header class="clear-float "  >
        <figure class="logo">
            <a href="Index_5067.html">
                <img src="./img/default.png" alt="logo" class="logo">
            </a>
        </figure>
        <figure class="user">
            <img src="./img/user.png" alt="user" class="user" class="user">
            <br>
            <p class="User">User</p>
        </figure>
    </header>
    <div class="welcome container" >
        <H1>
            Hello!           
        </H1>
        <p>
            Nice to meet you!
        </p>
    </div>
    <hr>
    <div class="banner">
        <a href="./backStore_7808.html">Products</a>
        <br>
        <br>
        <a href="./Ulist_9518.php">Users</a>
        <br>
        <br>
        <a href="./backOrder_40054003.html">Orders</a>       
    </div>
	<?php
		$index=$_GET["index"];
		if($index!=0){
			$fp=file("user.txt")[$index-1]; 
		    $s_arr = preg_split("/:/",$fp);
		}
		
	?>
	<form method="post" action="Uadd_6002.php?index="<?php 
				echo $index;
				?>">
    <table class="container">
        <tr>
			<td style="display: none;">
			    <input type="index" name="index" required="required" value="<?php 
				   echo $index;
				?>">
			</td>
            <td>Email:</td>
            <td>
                <input type="text" name="username" required="required" value="<?php 
				if($index!=0)
				   echo $s_arr[0];
				?>">
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="text" name="psw" required="required" value="<?php 
				   if($index!=0)
				   echo $s_arr[1];
				?>">
            </td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>
                <input type="text" name="phone" required="required" value="<?php 
				   if($index!=0)
				   echo $s_arr[3];
				?>">
            </td>
        </tr>
        <tr>
            <td>role:</td>
            <td>
                <select name="role" id="type">
                    <option >Customer</option>
                    <option >Admin</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Self introduction:</td>
            <td>
                <textarea name="si" id="si" cols="30" rows="10"></textarea>
            </td>
        </tr>
    </table>
    <button type="submit" class="container">Save</button>
	</form>
    <div class="footer" align=center>
        <p>
            About us | Contact us | Download app 
        </p>
        
        <p>Copyright © 2021-2025 One Mall All Rights Reserved</p>
    </div>
</body>
</html>