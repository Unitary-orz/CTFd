<?php
include "../flag.php";
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
$a = @$_GET["in"];
$b = 0;
echo "$a<br>";
if($b = intval($a)){

    if(floatval($a)==($b*100)){

        die("第一个flag是->".$flag1);
    }else{
        die("失败了啊啊啊啊啊 ！！！！！！！！");
    }
}else{
    show_source(__FILE__);
}
