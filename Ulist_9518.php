<!-- written by: Tianfei Qi, id: 40079518 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=375px"> -->
    <title>We-Mall Users</title>
    <link rel="stylesheet" href="./css/p9_9518.css">
</head>
<body>
    <header class="clear-float " >
        <figure class="logo">
            <a href="Index_5067.html">
                <img src="./img/default.png" alt="logo" class="logo">
            </a>
        </figure>
        <figure class="user">
            <img src="./img/user.png" alt="user" class="user" class="user">
            <br>
            <p class="User">User</p>
            <a href="./Uedit_9518.php?index=0">
            <button type="button" class="Add">Add</button>
            </a>
        </figure>
    </header>
    <section class="clear-float">
    <div>
        <div class="banner " >
            <a href="./Plist_7808.php?msg=">Products</a>
            <br>
            <br>
            <a href="./Ulist_9518.php">Users</a>
            <br>
            <br>
            <a href="./backOrder_40054003.html">Orders</a>           
        </div>
    </div>
        <div class="clear-float container">
           <table >
            <tr>
				<th>Id</th>
                <th>UserName</th>
                <th>pwd</th>
				<th>role</th>
                <th>phone</th>            
                <th>Edit</th>
            </tr>
			<?php
			$f_arr=file("user.txt");
			$index = 1;
			foreach($f_arr as $cont){
				$s_arr = preg_split("/:/",$cont);
				echo "<td class=\"c1\">".$index."</td>";
				echo "<td class=\"c1\">".$s_arr[0]."</td>";
				echo "<td class=\"c1\">".$s_arr[1]."</td>";
				echo "<td class=\"c1\">".$s_arr[2]."</td>";
			    echo "<td class=\"c1\">".$s_arr[3]."</td>";
				echo "<td class=\"buttons\">";
				echo    "<a href=\"\./A3/Uedit_9518.php?index=".$index."\">";
				echo  "<button type=\"button\">Edit</button>";
				echo   "</a>";   
				echo   "<a href=\"\./A3/Udelete_6002.php?index=".$index."\">";
				echo  "<button type=\"button\">Delete</button>";
				echo   "</a>";   
				echo "</td>";
				echo "</tr>";
				$index++;
			}
            
			?>
           </table> 
        </div>
        <div class="footer" align=center>
            <p>
                About us | Contact us | Download app 
            </p>
            
            <p>Copyright © 2021-2025 One Mall All Rights Reserved</p>
        </div>
    </section>
</body>
</html>