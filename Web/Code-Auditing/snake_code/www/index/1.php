<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<title>第一道题</title>
</head>
<body>
$flag='xxx'; 
<br>
extract($_GET);
<br>
if(isset($text))
<br>
 { 
<br>
    $content=trim(file_get_contents($flag));
<br>
    echo $content;
<br>
    if($shiyan==$content)
<br>
    { 
<br>
        echo'flag{xxx}'; 
<br>
    }
<br>
   else
<br>
   {
<br>	   
    echo'Oh.no';
<br>
   } 
<br>
 }
<br>
</body>
</html>

<?php
$flag='xxx'; 
extract($_GET);
 if(isset($text))
 { 
    $content=trim(file_get_contents($flag));
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


