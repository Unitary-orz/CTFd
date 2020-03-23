<?php
if(file_exists("../test2.php")){

}else{
    echo $flag2;
    $str = "<?php
echo \"我是flag的守护者\";
";
    $fp = fopen("../test2.php","w");
    fputs($fp,$str);
    fclose($fp);
}

