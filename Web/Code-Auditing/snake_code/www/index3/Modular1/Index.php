<?php
error_reporting(0);
include "flag.php";
highlight_file(__FILE__);
if(isset($_GET['args'])){
	$args = $_GET['args'];
	if(!preg_match("/^\w+$/",$args)){
		die("args error!");
	}
	eval("var_dump($$args);");
}
?>