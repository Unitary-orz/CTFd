<?php
$file ='index.php'; 
extract($_GET);
 if(isset($text))
 { 
    $content=trim(file_get_contents($file ));
    echo $content;
    if($text==$content)
    { 
        echo'flag{5cp4hnq3h6c4iscttks03yoq1ma3wod}'; 
    }
   else
   { 
    echo'Oh.no';
   } 
   }
?>

<!--
$file ='xxx'; 
extract($_GET);
 if(isset($text))
 { 
    $content=trim(file_get_contents($file));
    echo $content;
    if($shiyan==$content)
    { 
        echo'flag{xxx}'; 
    }
   else
   { 
    echo'Oh.no';
   } 
   }
