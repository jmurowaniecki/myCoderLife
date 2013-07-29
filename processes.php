<?php

session_start();

if (isset($_SESSION['processing']))
{
	print(json_encode($_SESSION['processing']));
}
?>
