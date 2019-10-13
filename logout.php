<?php
session_start();
if (!isset($_SESSION['userSession'])) {
	header("Location: lan_view.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: lan_view.php");
}

	if("username"){
	session_destroy();
	unset($_SESSION['SESS_NAME']);
	include'lan_view.php';
	}
?>
