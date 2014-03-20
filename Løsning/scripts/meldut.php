<?php

class meldut {

	public function showpage($database) {
	

		error_reporting(0);
		$url = $_GET['navn'];
		error_reporting(-1);
		//echo 'deleted '.$url;
		$query = "DELETE FROM registrering WHERE studId = '".$_SESSION['username']."' AND utvalgID = '".$url."';";
		$query_run = $database->prepare($query);
		$query_run->execute();
		header("Location: index.php?url=frontpage");

	
	}
}
?>