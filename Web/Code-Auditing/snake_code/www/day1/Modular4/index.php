<?php
error_reporting(0);
include "../flag.php";
header("Content-type: text/html; charset=utf-8");
if (empty($_GET["key"])){
die("这个程序员比较喜欢备份");
}
if(eregi("helloWorld",$_GET["key"])){
        die("我不想要你的helloWorld");
}
$_GET["key"] = urldecode($_GET["key"]);
if($_GET["key"]=="helloWorld"){
        echo $flag4;
}else{
    die("你怎么不给我说helloWorld");
}

