<?php

class frontpage {

public function showpage($database) {

		echo '<h1 id = Finn>Finn ett Studentutvalg!</h> <br>
			<h2 id = velg>Kryss av på dine fritidsinteresser</h>';
		echo '
		<div id="search">
		<form action="index.php?url=oversikt" method="post" checked>
		<input type="checkbox" name="0" value="Musikk og Media" checked> Musikk og Media   
		<input type="checkbox" name="1" value="Idrett og Friluft" checked>Idrett og Friluft   <br>
		<input type="checkbox" name="2" value="Skole" checked>Skole 
		<input type="checkbox" name="3" value="Spill" checked>Spill  
		<input type="checkbox" name="4" value="Utvikling" checked>Utvikling
		<input type="checkbox" name="5" value="Annet" checked>Annet<br>
		<input type="submit" value = "Finn Utvalg!">
		</form>
		</div>'; 
	}
}
?>