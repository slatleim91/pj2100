<?php

class testPage {

	public function showPage($database) {
		
		
		
		// Variabler for database
		//	$mysql_host = 'localhost'; 
		//	$mysql_user = 'root'; 
		//	$mysql_pass = '';
		//	$mysql_dbname = 'westerdals_data';
			
			// Oppkobling til database
		//	$database = new PDO("mysql:host=$mysql_host;dbname=$mysql_dbname", $mysql_user, $mysql_pass);
			
			//$_SESSION['TEST'] = 'TEST';
			//echo '<a href="index.php?url=testPage2"> TEST </a>';
			
			// Definering, preparering og kjøring av query - lagring av resultat
			$query = "SELECT * FROM utvalg;";
			$query_run = $database->prepare($query);
			$query_run->execute();
			
			$result = $query_run->fetchAll();
			echo 'test';
			// Utskrift av studentutvalg
			for($i = 0; $i < count($result); $i++){
				
				//$navn = str_replace(' ', '%20', $result[$i]['Navn'];
				//$navn = urlencode($result[$i]['Navn']);
				echo '
					<div class = utvalg>
						<a href=index.php?url=aktivitet&navn='.urlencode($result[$i]['Navn'].'>LINK</a>
						<img src="./bilder/'.$result[$i]['Bilde'].'"/>
						<p class = tittel>'.$result[$i]['Navn'].'</p>
						<p class = beskrivelse>'.$result[$i]['Oppsummering'].'</p>
					</div>';
			
			}
		}
	}
	
?>