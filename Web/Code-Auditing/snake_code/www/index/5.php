<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<title>第五道题</title>
</head>
<body>
$flag = "flag{xxxx}";
<br>
if (isset ($_GET['ctf'])) {
<br>
if (@ereg ("^[1-9]+$", $_GET['ctf']) === FALSE)
<br>
echo '必须输入数字才行';
<br>
else if (strpos ($_GET['ctf'], '#biubiubiu') !== FALSE)
<br>
{
<br>
	if (is_numeric($_GET['ctf']) == 0 )
<br>
		echo 'flag{xxxx}';
<br>
}
<br>
else
<br>
echo '骚年，继续努力吧啊~';
<br>
}
<br>
</body>
</html>





<?php
$flag = "flag";
if (isset ($_GET['ctf'])) {
if (@ereg ("^[1-9]+$", $_GET['ctf']) === FALSE)
echo '必须输入数字才行';
else if (strpos ($_GET['ctf'], '#biubiubiu') !== FALSE)
{
	if (is_numeric($_GET['ctf']) == 0 )
		echo 'flag{5cp4hnq3h6c4iscttks03yoq1ma68ow}';
}
else
echo '骚年，继续努力吧啊~';
}
?>