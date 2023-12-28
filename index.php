// Always redirect to facebook directory
<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
switch($tls) {
	case true:
		header('Location: https://'.$_SERVER['HTTP_HOST'].'/facebook/');
		break;
	case false:
		header('Location: http://'.$_SERVER['HTTP_HOST'].'/facebook/');
		break;
}
exit();
?>