<?php
class test{
    public $name = "init";
}
$a = new  test();
$a->name =  "flag";
echo  serialize($a);
?>
