<?php
include "../flag.php";
if (isset($_GET['name']) and isset($_GET['password'])) 
{
    if ($_GET['name'] == $_GET['password'])
        echo '<p>Your password can not be your name!</p>';
    else if (sha1($_GET['name']) === sha1($_GET['password']))
      echo $flag2;
    else
        echo '<p>Invalid password.</p>';
}
else
    show_source(__FILE__);
?>
