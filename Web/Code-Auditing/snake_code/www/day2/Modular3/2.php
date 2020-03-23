<?php
include "../flag.php";
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
session_start();
$flag = $flag2;
$fp = fopen("./shell.txt","w");
fputs($fp,$flag2);
fclose($fp);
class test{
    public $name = "init";
    public function __wakeup(){
        $myfile = fopen("shell.txt", "r") or die("Unable to open file!");
        $a = fread($myfile,filesize("shell.txt"));
        echo "你得到的是一句".$a;
        fclose($myfile);

    }
}
session_destroy();

show_source(__FILE__);

