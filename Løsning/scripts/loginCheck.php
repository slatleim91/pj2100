<?php

class loginCheck {

	public function showPage($database) {
	
	//$_SESSION['loginEmail']
	//$_SESSION['loginPass']
	
		$query = "SELECT * FROM bruker;";
		$query_run = $database->prepare($query);
		$query_run->execute();
			
		$result = $query_run->fetchAll();
		
		//var_dump ($result);

		for($i = 0; $i < count($result); $i++){
				
			if($result[$i]['MailAdr'] == $_POST['email'] && $result[$i]['Passord'] == $_POST['pass']) {
			
			$_SESSION['login'] = ''.$result[$i]['Staus'];
			
			echo 'ok';
			
			header("Location: index.php?url=loginSuccess");
			die();
			}
			
			
		}
		
		header("Location: index.php?url=login&error=1");
	
	
	}

}
?>