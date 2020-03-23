
<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include "../flag.php";
$hello = "你真是个乖宝宝";
$init = "你什么都没做啊小老弟";
class test{
    public $name = "init";
    public function __wakeup(){
        $fp = fopen("./shell.txt","w");
        fputs($fp,"hello");
        fclose($fp);
    }
    public function __destruct(){
        $fp = fopen("./shell.txt","w");
        fputs($fp,$this->name);
        fclose($fp);

    }
}

$str = @$_GET["s"];
if(empty($str)){
    show_source(__FILE__);
}else{
    @$un_str = unserialize($str);
}


//打印你写入的变量
include "./foot.php";

?>
