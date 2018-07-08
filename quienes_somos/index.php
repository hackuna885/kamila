<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();
session_destroy();

 ?>

<html>
	<head>
		<meta http-equiv="REFRESH" content="0; url=../index.php">
	</head>
</html>