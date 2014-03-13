<!DOCTYPE html>

<html>

	<head>	
	
		
		<title> Westerdals </title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="stil.css">
		<?php






		
				// Variabler for database
				$mysql_host = 'localhost'; 
				$mysql_user = 'root'; 
				$mysql_pass = '';
				$mysql_dbname = 'westerdals_data';
			
				// Oppkobling til database
				$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
				
	
	
		?>


	</head>
	
<body>