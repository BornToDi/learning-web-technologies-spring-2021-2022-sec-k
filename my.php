<?php
$myFile = fopen("myfile2.txt","r") or die("cannot open the file!");
echo fread($myFile, filesize("myfile2.txt"));
fclose($myFile);
?>


?>