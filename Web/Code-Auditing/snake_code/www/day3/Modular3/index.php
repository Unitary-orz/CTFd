<?php
error_reporting(0);
include '../flag.php';//当中的get_flag() 就是打印flag的函数
header("Content-type: text/html; charset=utf-8");
//header("Content-Type: text/plain");
show_source(__FILE__);
function complexStrtolower($regex, $value) {
    return preg_replace(
        '/(' . $regex . ')/ei',
        'strtolower("\\1")',
        $value
    );

}

foreach ($_GET as $regex => $value) {
    echo complexStrtolower($regex, $value) . "\n";
}


