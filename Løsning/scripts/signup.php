<?php

class signup {

public function showPage($database) {
		
		error_reporting(0);
		if($_GET['error'] == 1) {
		echo '<br>Venligst fyll ut alle feltene <br>
		email mA vaere av formen @westerdals.no ';
		}
		error_reporting(-1);
		echo'
		<form action="index.php?url=signupCheck" method="post">
		E-mail: <input type="text" name="email"><br>
		Navn: <input type="text" name="navn"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit">
		</form>';
		
		

	}


}
?>