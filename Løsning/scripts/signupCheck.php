<?php

class signupCheck {

public function showPage($database) {
		
		
		if(strpos($_POST['email'], '@westerdals.no') == true && $_POST['navn'] != null && $_POST['pass'] != null){
		
		
		
		} else {
		header("Location: index.php?url=signup&error=1");
		}
	}
}
?>