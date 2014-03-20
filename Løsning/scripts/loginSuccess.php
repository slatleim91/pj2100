<?php

class loginSuccess {

	public function showPage($database){
	
	echo 'Du har fatt logget inn som '.$_SESSION['login'].', woohoo';
	header("Location: index.php?url=frontpage");

		
	//echo '<a href=index.php?url=testPage>Tilbake til forsiden</a>';
	
	
	}

}
?>