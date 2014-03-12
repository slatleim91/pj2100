<!DOCTYPE html>

<html>
	<head>
		<title>PHP TEST</title>
		<meta charset="utf-8">
	</head>
	
	<body>
	
	<h1>Utvalgsside</h1>
	
		<?php 
		
			$mysql_host = 'localhost'; 
			$mysql_user = 'root'; 
			$mysql_pass = '';
			$mysql_dbname = 'westerdals_data';
			
			$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
			
			$query = "SELECT * FROM utvalg;";
			$query_run = $database->prepare($query);
			$query_run->execute();
			
			$result = $query_run->fetchAll();
			echo $result[0]['Navn'];
		
		?>	
	
	</body>
	
</html>