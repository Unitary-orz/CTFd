<?php
include "flag.php";
$_403 = "Input flag value";
$_200 = "Welcome Admin";
show_source(__FILE__);
if ($_SERVER["REQUEST_METHOD"] != "POST")
    die("Bye");
if ( !isset($_POST["flag"]) )
    die($_403);
foreach ($_GET as $key => $value)
    $$key = $$value;
foreach ($_POST as $key => $value)
    $$key = $value;
if ( $_POST["flag"] !== $flag6 )
    die($_403);
echo "This is your flag : ". $flag6 . "\n";
die($_200);
?>