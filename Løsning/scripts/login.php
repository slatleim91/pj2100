<?php

class login {

	public function showPage($database) {
	
		error_reporting(0);
		if($_GET['error'] == 1) {
		echo 'Feil Email eller passord';
		}	
		error_reporting(-1);

		echo'
		<span class="innlogging">
		<form action="index.php?url=loginCheck" method="post">
		<br>E-mail:   <input type="text" name="email"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit" value ="Login">
		</form>
		</span>';
		//error_reporting(0);
		//$_SESSION['loginEmail'] = $_POST["email"];
		//$_SESSION['loginPass'] = $_POST["pass"];
		//error_reporting(-1);
		//$_POST["email"];
		//$_POST["pass"];
	
	}
}
?>