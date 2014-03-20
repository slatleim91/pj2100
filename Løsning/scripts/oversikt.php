<?php

class oversikt {

public function showpage($database) {
		/*	error_reporting(0);
			$kategori = '';
			for($i = 0; $i < 6; $i++) {
				//echo $_POST[''.$i.''];
				if ($_POST[''.$i.''] != null) {
				//echo $_POST[''.$i.''];
				echo ' ';
				$kategori .= ' || '.$_POST[''.$i.''];
				//echo $kategori;
				}
	
			}*/
			error_reporting(-1);
			//echo $kategori;
			error_reporting(0);
			echo $_POST[''.$i.''];
			$query = "SELECT * FROM utvalg WHERE Kategori IN ('".$_POST['0']."', '".$_POST['1']."', '".$_POST['2']."', '".$_POST['3']."', '".$_POST['4']."', '".$_POST['5']."');";
			error_reporting(-1);
			$query_run = $database->prepare($query);
			$query_run->execute();
			
			$result = $query_run->fetchAll();
			if ($result != null) {
				for($i = 0; $i < count($result); $i++){
			
					echo '
						<a class = utvalg href=index.php?url=aktivitet&navn='.urlencode($result[$i]['Navn']).'>
							<div class = utvalg>
								<img src="./bilder/'.$result[$i]['Bilde'].'"/>
								<p class = tittel>'.$result[$i]['Navn'].'</p>
								<p class = beskrivelse>'.$result[$i]['Oppsummering'].'</p>
							</div>
						</a>';
		
			
			}
		}	
	}
}

?>