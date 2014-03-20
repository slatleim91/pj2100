<?php

class registrering {

public function showpage($database) {
		
		$url = $_GET['navn'];
		
		if($_SESSION['login'] = 'Student'){
		
			$query = $database->prepare("INSERT INTO registrering VALUES (:studID, :utvalgID)");
			$query->bindParam(':studID', $studID);
			$query->bindParam(':utvalgID', $utvalgID);
		
			$studID = $_SESSION['username'];
			$utvalgID = $url;
			$query->execute();
			
			//echo $studID.' '.$utvalgID;
			
			echo 'Du har blitt med <a href=index.php?url=aktivitet&navn='.urlencode($url).'>Til aktiviteten</a>';
		}
	}

}
?>