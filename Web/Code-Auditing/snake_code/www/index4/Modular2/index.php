<html>
    <title>This is the first question</title>
    
<?php
    error_reporting(0);
	header("content-type:text/html;charset=utf-8");
    if(!$_GET[file]){echo '<a href="./index.php?file=show.php">点击我，flag不在这里</a>';}
    $file=$_GET['file'];
    if(strstr($file,"../")||stristr($file, "tp")||stristr($file,"input")||stristr($file,"data")){
        echo "Oh no!";
        exit();
    }
    include($file); 
//flag{edulcni_elif_lacol_si_siht}

?>
</html>