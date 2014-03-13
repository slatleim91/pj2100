<?php

class loginSuccess {

	public function showPage($database){
	
	echo 'Du har fatt logget inn som '.$_SESSION['login'].', woohoo';

		
	echo '<a href=index.php?url=testPage>Tilbake til forsiden</a>';
	
	
	}

}
?>