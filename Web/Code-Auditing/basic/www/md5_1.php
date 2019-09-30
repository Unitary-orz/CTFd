<?php
show_source(__FILE__);
error_reporting(0);
include "flag.php";
if (isset($_GET['username']) and isset($_GET['password'])) {
    if ($_GET['username'] == $_GET['password'])
        print 'Your password can not be your username.';
    else if (md5($_GET['username']) === md5($_GET['password']))
        die('Flag: '.$flag3);
    else
        print 'Invalid password';
}
?>