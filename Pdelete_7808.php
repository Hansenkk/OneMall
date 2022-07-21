<?php
$index=$_GET["index"]-1;

//get delete item#

$fp=file("products.txt");

$total=count($fp);

//get total lines

foreach ($fp as $line) {

   

    $tmp[]=$line;

   

}
$save_str ="";
for($i=0;$i<$total;$i++){

    

    if($i<>$index)

        $save_str.=$tmp[$i];

}

//write files

$files=fopen("products.txt","w");

fwrite($files,$save_str);

fclose($files);

header('Location:/A3/Plist_7808.php?msg=');
?>
