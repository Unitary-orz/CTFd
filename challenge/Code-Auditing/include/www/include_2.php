<?php
    $file = @$_GET['file'];
    if(!isset($file)){
        echo "人家就在这里，快来抱抱我嘛";
    }
    else{
        if(preg_match('/php:\/\/input/',$file)){
            echo "碰到人家了，换种方式抱抱我";
            echo "<!--flag{knd57mdzkjwzn hint:data-->";
            die();
        }
        elseif(preg_match('/data/',$file)){
            include $file;
        }
        else{
            echo "这样不行";
        }
            
    }
 
   // ygottome}
?>
<!--  
$file = $_GET["file"];  
include $file;
-->