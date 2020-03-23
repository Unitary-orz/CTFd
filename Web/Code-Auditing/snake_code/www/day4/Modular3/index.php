<?php
error_reporting(0);
include '../flag.php';//当中的get_flag() 就是打印flag的函数
header("Content-type: text/html; charset=utf-8");
$file = $_GET['file'];
include $file;

