<? php

class database {
	
	$database = new PDO("mysql:host=localhost;dbname=test","username","password");
	$noe = mysql_query('SELECT * from table');
	
	}
	
	->