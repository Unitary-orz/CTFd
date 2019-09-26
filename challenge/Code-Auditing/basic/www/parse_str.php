<?php
show_source(__FILE__);
include "flag.php";
$a = "www.abc.com";
parse_str($_SERVER["QUERY_STRING"]);
if ($a != "QNKCDZO" && md5($a) == md5("QNKCDZO")) 
{
     echo $flag7;
} 
else 
{
     exit(‘其实很简单其实并不难！’);
}