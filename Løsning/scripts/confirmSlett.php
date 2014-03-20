<?php

class confirmSlett {
	
	public function showpage($database) {
		if($_POST['radio'] == no) {
		
			header("Location: index.php?url=frontpage");	
			die();
			}
		error_reporting(0);
		$url = $_GET['navn'];
		error_reporting(-1);
		echo 'deleted '.$url;
		$query = "DELETE FROM utvalg WHERE Navn = '".$url."';";
		$query_run = $database->prepare($query);
		$query_run->execute();
	
	}
	
}
?>