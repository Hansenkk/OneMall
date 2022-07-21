<?php
    $index = $_POST["index"];
    //echo $index;
    $item = $_POST["item"];
    $name = $_POST["name"];
	$cat = $_POST["type"];
    $inventory = $_POST["inventory"];
    $price = $_POST["price"];
	
	if($inventory<1 || $price <=0){
		  
		header('Location:/A3/Plist_7808.php?msg="Invalid parameter! Roll back!"');
	}
	else{
    //parse the file
    $files=fopen("products.txt","a");
    fwrite($files,$cat.":".$name.":".$inventory.":".$price."\n");
    fclose($files);
    header('Location:/A3/Pdelete_7808.php?index='.$index);}
?>