<?php

class aktivitet {

	public function showPage($database) {
		$navn = $_GET['navn'];
		//echo '<br>'.$navn.'<br>';
		$query = "SELECT * FROM utvalg WHERE Navn = '".$navn."'";
		//$query = "SELECT * FROM utvalg";
		$query_run = $database->prepare($query);
		$query_run->execute();
			
		$result = $query_run->fetchAll();
		
		//var_dump($result);
		// Utskrift av studentutvalg
		echo '
			<div class = aktivitet>
				<img src="./bilder/'.$result[0]['Bilde'].'"/>
				<p id="unavn">'.$result[0]['Navn'].'</p>
				<p id="uoppsummering">'.$result[0]['Oppsummering'].'</p>
				<p id="utekst">'.$result[0]['Tekst'].'</p>
			</div>';
						
		error_reporting(0);
		if($_SESSION['login'] ==  'Student') {
		
			$query = "SELECT * FROM registrering WHERE studID = '".$_SESSION['username']."'";
			//$query = "SELECT * FROM utvalg";
			$query_run = $database->prepare($query);
			$query_run->execute();
				
			$result2 = $query_run->fetchAll();
			//var_dump($result2);
			
			for($i = 0; $i < count($result2); $i++){
				
				if($result2[$i]['StudID'] == $_SESSION['username'] && $result2[$i]['UtvalgID'] == $navn) {
					echo '<br><a id="meldopp" href=index.php?url=meldut&navn='.urlencode($navn).'>Meld ut</a><br>';
					die();
				}
				
			}
			
			
			echo '<br><a id="meldopp" href=index.php?url=registrering&navn='.urlencode($navn).'>Bli med</a><br>';
		}
		if($_SESSION['login'] == 'Admin'){
			echo '<br><a id="meldopp" href=index.php?url=slettUtvalg&navn='.urlencode($navn).'>Slett utvalg</a><br>';

		}
		error_reporting(-1);

	
	}
}
?>