<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
ini_set('session.serialize_handler', 'php_serialize');
session_start();
$_SESSION["spoock"]= $_GET["a"];
if(isset($_SESSION["spoock"])){
    echo "<script>window.location.href='2.php'</script>";
}
show_source(__FILE__);

