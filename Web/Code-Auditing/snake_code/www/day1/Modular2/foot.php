<?php
$myfile = fopen("shell.txt", "r") or die("Unable to open file!");
$a = fread($myfile,filesize("shell.txt"));
echo "你得到的是一句".$$a;
fclose($myfile);
