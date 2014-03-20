<?php

class lagAktivitet {

public function showpage($database) {

		error_reporting(0);
		if($_GET['error'] == 1) {
		echo '<br>Venligst fyll ut alle feltene <br>
		email mA vaere av formen @westerdals.no ';
		}
		error_reporting(-1);
		echo'
		<form action="index.php?url=lagAktivitetCheck" method="post">
		Navn: <input type="text" name="Navn"><br>
		Oppsummering: <input type="text" name="Oppsummering"><br>
		Kategori: <select multiple="multiple" name="Kategori">
		<option> Musikk og Media</option>
		<option> Idrett og Friluft</option>
		<option> Skole</option>
		<option> Spill</option>
		<option> Fritid</option>
		<option> Annet</option>
		</select><br>
		Bilde: (navn bildefil)<input type="text" name="bilde"><br>
		<TEXTAREA NAME="tekst" ROWS=5 COLS=50 ></TEXTAREA><br>
		<input type="submit">
		</form>';
		//tekst: <input type="text" name="tekst"><br>
	}
}
?>