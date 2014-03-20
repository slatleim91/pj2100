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
				header("Location: index.php?url=frontpage");
				die();
				}
				error_reporting(-1);
		
				// Variabler for database
				//$mysql_host = 'mysql.nith.no'; 
				//$mysql_user = 'johand13'; 
				//$mysql_pass = 'johand13';
				//$mysql_dbname = 'johand13';
				
				$mysql_host = 'localhost'; 
				$mysql_user = 'root'; 
				$mysql_pass = '';
				$mysql_dbname = 'westerdals_data';
			
				// Oppkobling til database
				$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
				echo '<a id="home"href=index.php?url=frontpage><img id="logo"src="./bilder/home_btn.png"/></a><br>';
				echo '<div id=head></div>';
				error_reporting(0);				
				if($_SESSION['login'] == 'Admin' || $_SESSION['login'] == 'Student') {

				echo '<a id="login" href=index.php?url=myPage&authority='.$_SESSION['login'].'>Min '.$_SESSION['login'].'</a> '.'<a id="login"href=index.php?url='.$_GET['url'].'&logout=1>Logout</a><br>';
				//echo ''.$_SESSION['username'];

				} else {
				echo '<a id="login" href=index.php?url=login>Login</a>'.' <a id="login" href=index.php?url=signup>Signup</a><br>';
				}
				error_reporting(-1);
				echo '<br>';
		?>


	</head>
	
<body>