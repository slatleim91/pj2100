<?php

class signupCheck {

public function showPage($database) {
		
		
		if(strpos($_POST['email'], '@westerdals.no') == true && $_POST['fornavn'] != null && $_POST['etternavn'] != null && $_POST['pass'] != null){
		
		$query = $database->prepare("INSERT INTO bruker VALUES (:email, :fornavn, :etternavn, :passord, :adgang)");
		$query->bindParam(':email', $email);
		$query->bindParam(':fornavn', $fornavn);
		$query->bindParam(':etternavn', $etternavn);
		$query->bindParam(':passord', $passord);
		$query->bindParam(':adgang', $adgang);
		
		$email = $_POST['email'];
		$fornavn = $_POST['fornavn'];
		$etternavn = $_POST['etternavn'];
		$passord = $_POST['pass'];
		$adgang = 'Student';
		$query->execute();
		
		//$query = "INSERT INTO `bruker` VALUES('".$_POST['email']."', '".$_POST['fornavn']."', '".$_POST['etternavn']."', '".$_POST['pass'].", 'Student');";
		//$query_run = $database->prepare($query);
		//$query_run->execute();
		
		//echo 'det skulle gått';
		header("Location: index.php?url=signupSuccess");
		} else {
		header("Location: index.php?url=signup&error=1");
		}
	}
}
?>