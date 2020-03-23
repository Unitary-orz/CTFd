<?php
include "../flag.php";
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
$_CONFIG['extraSecure'] = true;

foreach(array('_GET','_POST') as $method) {
    foreach($$method as $key=>$value) {
        unset($$key);
    }
}

if ($_CONFIG['extraSecure'] == false) {
    echo $flag1;
}
show_source(__FILE__);
