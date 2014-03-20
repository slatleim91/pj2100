<?php

class slettUtvalg {

public function showpage($database) {
		error_reporting(0);
		$url = $_GET['navn'];
		error_reporting(-1);
		echo 'Vil du slette '.$url.' ?';
		echo '	
				<form action="index.php?url=confirmSlett&navn='.urlencode($url).'" method="post">
				<INPUT type=radio name="Radio" value="yes"> yes
				<INPUT type=radio name="Radio" value="no" checked> no
				<input type="submit"value ="Slett">
				</form>

			';
	}
}

?>