
<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
include "../flag.php";
   show_source(__FILE__);
   $_403 = "?????你做了什么都说了不要有flag了";

   $_200 = "Welcome Admin请不要flag";

   if ($_SERVER["REQUEST_METHOD"] != "POST")
   {
         die("BugsBunnyCTF is here :p…");
   }

   if ( !isset($_POST["flag"]) )
   {
   		// echo "123";
         die($_403);
   }
   foreach ($_GET as $key => $value)
   {
   			// echo "123------------";
         	$$key = $$value;
   }
   foreach ($_POST as $key => $value)
   {
   		// echo "123------------";
         $$key = $value;
   }
   if ( $_POST["flag"] !== $flag3 )
   {
         die($_403);
   }
   echo "你想要的: ". $flag3 . "\n";
   die($_200);
   $$GLOBALS


