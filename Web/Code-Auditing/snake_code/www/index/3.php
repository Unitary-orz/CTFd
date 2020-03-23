<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<title>第三道题</title>
</head>
<body>
$flag = "flag{xxxxx}";
<br>
if(isset($_GET['math'])){
<br>
	if(is_numeric($_GET['math']) != 1 ){
<br>
		if(44*3>$_GET['math'] && $_GET['math']>44*2){
<br>
			echo "flag{xxxxx}";
<br>
		}
<br>
	}else{
<br>
		echo 'No';
<br>
	}
<br>
	}
</body>
</html>



<?php
$flag = "flag{xxxxx}";
if(isset($_GET['math'])){

	if(is_numeric($_GET['math']) != 1 ){

		if(44*3>$_GET['math'] && $_GET['math']>44*2){
			echo "flag{5cp4hnq3h6c4iscttks03yoq1ma67ow}";
		}
	}else{
		echo 'No';
	}
	}

