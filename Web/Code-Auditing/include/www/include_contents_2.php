<?php
    show_source(__FILE__);
    $file = @$_GET['file'];
    $name = @$_GET['name'];
    $data = htmlspecialchars(@$_GET['data']);
    if (@file_get_contents($file,'r') == 'Hello World'){
        file_put_contents($name, $data);
        echo $name."写入数据:".$data;
    }
    else{
        echo "Bye";
    }
?>