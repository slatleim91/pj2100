<?php

class signup {

public function showPage($database) {

		echo'
		<form action="index.php" method="post">
		E-mail:   <input type="text" name="email"><br>
		Navn:     <input type="text" name="navn"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit">
		</form>';
		
		

	}


}
?>