<?php
if(isset($_GET['cmd'])){
	$cmd = $_GET['cmd'];
	eval($cmd);
	echo "<br>";
	echo 'here is the flag';
}else{
	show_source(__FILE__);
	}

