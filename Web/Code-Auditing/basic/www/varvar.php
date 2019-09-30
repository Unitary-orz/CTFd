<?php
include "flag_varvar.php";                
$text = @$_REQUEST['hello'];     
if(!preg_match('/^\w*$/',$text )){ 
    die('ERROR');
}
@eval("var_dump($$text);"); //hint:globl
show_source(__FILE__);
?>