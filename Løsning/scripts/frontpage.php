<?php

class frontpage {

public function showpage($database) {

		echo '
		<div id="search">
		<form action="index.php?url=oversikt" method="post">
		<input type="checkbox" name="0" value="Musikk og Media"> Musikk og Media   
		<input type="checkbox" name="1" value="Idrett og Friluft">Idrett og Friluft   <br>
		<input type="checkbox" name="2" value="Skole">Skole 
		<input type="checkbox" name="3" value="Spill">Spill  
		<input type="checkbox" name="4" value="Fritid">Fritid   
		<input type="checkbox" name="5" value="Annet">Annet<br>
		<input type="submit" value = "Finn Utvalg!">
		</form>
		</div>'; 
	}
}
?>