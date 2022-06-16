<?php
$myfile = fopen("h3h3.txt", "w") or die("Unable to open file!");
$txt = "My name is Naeem\n";
fwrite($myfile, $txt);
$txt = "I live in Dhaka!\n";
fwrite($myfile, $txt);
fclose($myfile);


?>

