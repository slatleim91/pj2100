<?php

class lagAktivitetCheck {

public function showpage($database) {

	if($_POST['Navn'] != null && $_POST['Oppsummering'] != null && $_POST['Kategori'] != null && $_POST['bilde'] != null && $_POST['tekst'] != null){
		
			$query = $database->prepare("INSERT INTO utvalg VALUES (:Navn, :Oppsummering, :Kategori, :bilde, :tekst)");
			$query->bindParam(':Navn', $Navn);
			$query->bindParam(':Oppsummering', $Oppsummering);
			$query->bindParam(':Kategori', $Kategori);
			$query->bindParam(':bilde', $bilde);
			$query->bindParam(':tekst', $tekst);
	
			$Navn = $_POST['Navn'];
			$Oppsummering = $_POST['Oppsummering'];
			$Kategori = $_POST['Kategori'];
			$bilde = $_POST['bilde'];
			$tekst = $_POST['tekst'];
			$query->execute();
			
			echo 'ok';
			header("Location: index.php?url=myPage&authority=".$_SESSION['login']);
			die();
		} else {
		header("Location: index.php?url?myPage$authority=".$_SESSION['login']);
		}
	}

}

?>