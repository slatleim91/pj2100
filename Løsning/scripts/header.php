<!DOCTYPE html>

 
<html>

	<head>	
	
		
		<title> Westerdals </title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="stil.css">
		<?php
		
				error_reporting(0);
				session_start();
				if($_GET['logout'] == 1) {
				
				$_SESSION['login'] = 'Guest';
				header("Location: index.php?url=".$_GET['url']);
				die();
				}
				error_reporting(-1);
		
				// Variabler for database
				$mysql_host = 'localhost'; 
				$mysql_user = 'root'; 
				$mysql_pass = '';
				$mysql_dbname = 'westerdals_data';
			
				// Oppkobling til database
				$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
				
				
				if($_SESSION['login'] == 'Admin' || $_SESSION['login'] == 'Student'){
				
				echo 'Logget inn som '.$_SESSION['login'].' '.'<a href=index.php?url='.$_GET['url'].'&logout=1>Logout</a>';
				
				} else {
				echo '<a href=index.php?url=login>Login</a>'.' <a href=index.php?url=signup>Signup</a>';
				}
	
		?>


	</head>
	
<body>