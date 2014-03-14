<?php

class login {

	public function showPage($database) {
	


		echo'
		<form action="index.php?url=loginCheck" method="post">
		E-mail:   <input type="text" name="email"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit">
		</form>';
		//error_reporting(0);
		//$_SESSION['loginEmail'] = $_POST["email"];
		//$_SESSION['loginPass'] = $_POST["pass"];
		//error_reporting(-1);
		//$_POST["email"];
		//$_POST["pass"];
	
	}
}
?>