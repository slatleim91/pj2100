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
				
			//echo $result[$i]['MailAdr'];
			//echo $result[$i]['Passord'];
			
			
			if($result[$i]['MailAdr'] == $_POST['email'] && $result[$i]['Passord'] == $_POST['pass']) {
			
			$_SESSION['login'] = $result[$i]['Adgang'];
			$_SESSION['username'] = $result[$i]['MailAdr'];
			//echo $_SESSION['username'];
			echo ' ok';
			header("Location: index.php?url=frontpage");
			die();
			}
			
			
		}
		
		header("Location: index.php?url=login&error=1");
	
	
	}

}
?>