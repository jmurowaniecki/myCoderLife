<?php
session_start();

if (isset($_GET['name']) && isset($_GET['status'])) {
	$_SESSION['processing'][] = array(
		'name' => $_GET['name'],
		'status' => $_GET['status']
	);
}
else
{
	session_destroy();
}
?>
