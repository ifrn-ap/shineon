<?php
	session_start();
	$_SESSION['matricula'] = null;
	//$_SESSION['senha'] = null;
	session_destroy();
	header('Location:index.php');
?>