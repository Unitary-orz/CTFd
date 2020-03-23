<?php
include "../flag.php";
//error_reporting(0);
header("Content-type: text/html; charset=utf-8");
show_source(__FILE__);#想办法找到password.txt
echo __FILE__;
$file = "1";
if(isset( $_GET['file'])){
    $file = $_GET['file'];
}
$root  = substr(__FILE__,0,-9);
echo $root;
include $root. $file.'.php';


?>

