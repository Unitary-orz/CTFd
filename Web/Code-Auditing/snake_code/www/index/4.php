<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<title>第四道题</title>
</head>
<body>
$flag = "flag{xxxxx}";
<br>
if (isset($_GET['a']) and isset($_GET['b'])) {
<br>
if ($_GET['a'] == $_GET['b'])
<br>
print 'No';
<br>
else if (md5($_GET['a']) === md5($_GET['b']))
<br>
echo "flag{xxxxx}";
<br>
else
<br>
print 'Invalid password';
<br>
}
<br>
</body>
</html>

<?php
$flag = "flag{xxxxx}";
if (isset($_GET['a']) and isset($_GET['b'])) {
if ($_GET['a'] == $_GET['b'])
print 'No';
else if (md5($_GET['a']) === md5($_GET['b']))
echo "flag{5cp4hnq3h6c4iscttks03yoq1ma67ow}";
else
print 'Invalid password';
}
?>