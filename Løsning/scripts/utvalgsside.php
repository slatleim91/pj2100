<!DOCTYPE html>

<html>
	<head>
		<title>PHP TEST</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="stil.css">

	</head>
	
	<header>
	
		<h1>STUDENTUTVALG</h1>
	
	</header>
	
	<body>
	
	
	
		<?php 
		
			// Variabler for database
			$mysql_host = 'localhost'; 
			$mysql_user = 'root'; 
			$mysql_pass = '';
			$mysql_dbname = 'westerdals_data';
			
			// Oppkobling til database
			$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
			
			// Definering, preparering og kjøring av query - lagring av resultat
			$query = "SELECT * FROM utvalg;";
			$query_run = $database->prepare($query);
			$query_run->execute();
			
			$result = $query_run->fetchAll();
			
			// Utskrift av studentutvalg
			for($i = 0; $i < count($result); $i++){
				
				echo '
					<div class = utvalg>
						<img src="/uploads/'.$result[$i]['Bilde'].'"/>
						<p class = tittel>'.$result[$i]['Navn'].'</p>
						<p class = beskrivelse>'.$result[$i]['Oppsummering'].'</p>
					</div>';
			
			}
		
		?>	
	
	</body>
	
</html>