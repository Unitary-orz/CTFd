<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<title>第二道题</title>
</head>
<body>
$flag = "flag{xxxxx}";
<br>
if (isset($_GET['a'])) {
<br>
if (strcmp($_GET['a'], $flag) == 0)
<br>
{
<br>
	if (is_numeric($_GET['a'][5]) != 1){
<br>
		echo "flag{xxxxx}";
<br>
	}else{
<br>
		echo '快成功了';
<br>
	}
<br>
}else{
<br>
	print 'No';
<br>
	}
<br>
}



</body>
</html>
<?php
$flag = "flag{xxxxx}";
if (isset($_GET['a'])) {
if (strcmp($_GET['a'], $flag) == 0)
{
	if (is_numeric($_GET['a'][5]) != 1){
		echo "flag{5cp4hnq3h6c4iscttks03yoq1ma4wod}";
	}else{
		echo '快成功了';
	}
}else{
	print 'No';
	}
}
?>

