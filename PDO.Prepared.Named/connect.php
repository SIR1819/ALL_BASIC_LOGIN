<?php
$userdb = "php";
$hostdb = "localhost";
$passdb = "php";
$namedb = "ex_login";
 


try {
$conn = new PDO("mysql:host=$hostdb;dbname=$namedb",$userdb,$passdb);
}
catch (PDOException $e){
	echo "ligação falhou"." : ".$e->getMessage();
}

// a partir daqui temos uma variavel com uma ligacao $conn

?>