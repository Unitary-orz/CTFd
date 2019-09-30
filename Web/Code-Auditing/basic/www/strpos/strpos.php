<?php
show_source(__FILE__);
$flag8='flag in ../flag.php';
$filename = $_GET['file'];
if(strpos($filename, 'flag') != false) die("非法字符");
@include "./$filename";
echo $flag8;
?>