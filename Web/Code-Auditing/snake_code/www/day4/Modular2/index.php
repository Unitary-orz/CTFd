
<?php
//error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include "../flag.php";
//  请想办法执行get_flag();
   show_source(__FILE__);
$route = "share";
$basePath = $_GET['file'];
if(isset($_GET["test"])){
    $route = $_GET['test'];
}

if ($route == "share") {
  require_once $basePath . "/action/m_share.php";
} elseif ($route == "sharelink") {
  require_once $basePath . "/action/m_sharelink.php";
}
