<?php
show_source(__FILE__);
include "flag.php";
$md51 = md5('QNKCDZO');
$text = @$_GET['text'];
$md52 = @md5($text);
if(isset($text)){
if ($text != 'QNKCDZO' && $md51 == $md52) {
    echo $flag4;
} else {
    echo "false!!!";
}}
else{
    echo "please input text";
}
?>