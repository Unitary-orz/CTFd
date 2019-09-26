<?php
error_reporting(0);
$user = $_GET["user"];  
$password = $_GET["password"];  
$file = $_GET["file"];

if(isset($user)&&(file_get_contents($user,'r')==="welcome to the ThomasCTF")){  
    echo "How are you?<br>";  
    if(preg_match("/flag/",$file)){ 
		echo "flag是不会就这样让你拿到的!";
        exit();  
    }else{  
        include($file);   
        $password = unserialize($password);  
        echo $password;
    }
}else{  
    echo "welcome";  
}  
  
?>  
  
<!--  
$user = $_GET["user"];  
$file = $_GET["file"];  
$pass = $_GET["password"];  
  
if(isset($user)&&(file_get_contents($user,'r')==="welcome to the ThomasCTF")){  
    echo "hello admin!<br>";  
    include($file); //hint.php  
}else{  
    echo "you are not admin ! ";  
}  
 -->   