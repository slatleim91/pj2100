<?php

class aktivitet {

	public function showPage(PDO $database) {
		
		error_reporting(0);
		$aktivitetnavn = $_GET['navn'];
		error_reporting(-1);
		$tekst = 'Dette er en aktivitet: '.$aktivitetnavn;
		
		echo $tekst;
	
	
	}
}
?>