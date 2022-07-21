<?php
	//WRITTEN: Fangzheng Liu, Tianfei Qi
    $index=$_GET["index"]-1;
    $fp=file("user.txt"); 
    $total=count($fp); 
   
    foreach ($fp as $line) { 
	    $tmp[]=$line; 
    } 
    $savestr ="";
    for($i=0;$i<$total;$i++){
	    if($i<>$index) 
	    $savestr.=$tmp[$i]; 
    } 
   
    $fp=fopen("user.txt","w"); 
    fwrite($fp,$savestr); 
    fclose($fp);
    header('Location:/A3/Ulist_9518.php');
?>