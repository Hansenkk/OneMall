<!-- Written by Chen, Qian ID: 27867808 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>We-Mall BackStore</title>
    <!-- favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="/favicon/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-config" content="/favicon/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- css -->
    <link rel="stylesheet" href="./css/backStore_7808.css" />
    <link rel="stylesheet" href="./css/backStore_7808_media.css" />
  </head>

  <body>
    <!--header-->
    <header>
      <figure class="logo">
        <a href="Index_5067.html">
          <img src="./img/default.png" alt="Logo is here" class="logo"
        /></a>
      </figure>

      <figure class="user">
        <img src="./img/userIcon.png" alt="userLogo" class="userIcon" /><br />
        <p>User</p>
      </figure>
    </header>

    <section class="container">
      <!--    left panner-->
      <div class="banner">
        <a href="Plist_7808.php?msg=">Products</a>
        <a href="Ulist_9518.php">Users</a>
        <a href="Olist_4003.php">Orders</a>
        <!-- <a href="#"></a>
        <a href="#"></a> -->
        <!-- <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a> -->
      </div>
      
      <!-- add button -->
      <a href="./Pedit_7808.php?index=0"
        ><button id="add" type="button">Add</button></a
      >
	<?php
	  function alert($msg) {
	      echo "<script type='text/javascript'>alert('$msg');</script>";
	  }
	  $msg = $_GET['msg'];
	  if($msg!=null)
	      {alert($_GET['msg']); }
	  
	  ?>
      <!-- product List -->
      <div class="productList">
        <table class="product_table" >
          
          <tr class="row">
            <th>Item#</th>
			<th>Category</th> 
			<th>Name</th>
			<th>Inventory</th>
            <th>Price</th>
            <th>Edit</th>
          </tr> 
		<tbody id="list">
        <?php
        $f_arr=file("products.txt");
        $index = 1;
        foreach($f_arr as $cont){
			echo "<tr class=\"row\">";
        	$s_arr = preg_split("/:/",$cont);
        	echo "<td class=\"item\">".$index."</td>";
        	echo "<td class=\"name\">".$s_arr[0]."</td>";
        	echo "<td class=\"category\">".$s_arr[1]."</td>";
        	echo "<td class=\"inventory\">".$s_arr[2]."</td>";
            echo "<td class=\"price\"> $".$s_arr[3]." </td>";
        	echo "<td class=\"buttons\">";
        	echo    "<a href=\"\./A3/Pedit_7808.php?index=".$index."\">";
        	echo  "<button type=\"button\">Edit</button>";
        	echo   "</a>";   
        	echo   "<a href=\"\./A3/Pdelete_7808.php?index=".$index."\">";
        	echo  "<button type=\"button\">Delete</button>";
        	echo   "</a>";   
        	echo "</td>";
        	echo "</tr>";
        	$index++;
        }
        ?>
        </tbody>
        </table>
      </div>
      <footer id="footer">
        <p>
          About us | Contact us | Download app
          <br />
          Copyright © 2021 - 2025 One Mall All Rights Reserved
        </p>
      </footer>
    </section>
    <script src="./js/jquery-1.8.3.min.js"></script>
   <!-- <script src="./js/product_7808.js"></script> -->
    
  </body>
</html>
