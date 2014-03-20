<?php

class myPage{

public function showpage($database) {

		if($_SESSION['login'] == 'Guest') {
		
		header("Location: index.php?url=frontpage");
		die();		
		}
		
		if ($_SESSION['login'] == 'Student') {
		$kode = new myPage();
		$kode->student($database);
		
		}
		
		if ($_SESSION['login'] == 'Admin') {
		$kode = new myPage();
		//$kode->student($database);
		echo $kode->admin($database);
		
		}


	}
	
public function student($database) {

	$query = "SELECT UtvalgID FROM registrering WHERE studID = '".$_SESSION['username']."';";
	$query_run = $database->prepare($query);
	$query_run->execute();
	
	$result = $query_run->fetchAll();
	echo '<p>Mine Aktiviteter: </p><br>';
	//var_dump($result);
		for($i = 0; $i < count($result); $i++){

				//echo '<p>'.$result[$i]['UtvalgID'].'</p>';
				echo '<a class = utvalg href=index.php?url=aktivitet&navn='.urlencode($result[$i]['UtvalgID']).'>'.$result[$i]['UtvalgID'].'</a>';
				echo '<br>';
		}
	}

public function admin($database) {

	echo '<a href=index.php?url=lagAktivitet>Lag aktivitet</a>';
}

}
?>