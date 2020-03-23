<?php

include "../flag.php";

header("Content-type: text/html; charset=utf-8");
$test = @$_GET['test'];

if(isset($test)){
if (!is_array($_GET['test'])) {
    die();
	}

    for ($i = 0; $i < count($test); $i++) {
        if ($test[$i] === "admin") {
            echo "error";
            exit();
        }
        $test[$i] = intval($test[$i]);
    }
    if (array_search("admin", $test) === 0) {
        echo $flag5;
    } else {
        echo "false";
    }
}else{
    show_source(__FILE__);
}


