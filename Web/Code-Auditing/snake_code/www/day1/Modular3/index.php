<?php
error_reporting(0);
include "../flag.php";
header("Content-type: text/html; charset=utf-8");
if (isset ($_GET['password'])) {
    if (ereg ("^[a-zA-Z0-9]+$", $_GET['password']) === FALSE)
    {
        echo '<p>乖宝宝你很乖c</p>';
    }
    else if (strlen($_GET['password']) < 8 && $_GET['password'] > 9999999)
    {
        if (strpos ($_GET['password'], '*-*') !== FALSE)
        {
            die('Flag: ' . $flag3);
        }
        else
        {
            echo('<p>*-* 这个没有？</p>');
        }
    }
    else
    {
        echo '<p>数字？？？</p>';
    }
}else{
    echo "听说程序员都喜欢vim";
}

