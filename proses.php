<?php
session_start();
$key=$_GET['key'];
switch ($key) {
	case 'logout':
		if(session_destroy()){
			header('location: login.php');
		}
		break;
	
	case 'ceksesi'
		if (!isset($_SESSION['user']) || strlen(trim($_SESSION['user']))<1) {
			header('location: login.php');
		}
		break;
}
?>