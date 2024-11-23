<?php
function db_connect ($db){
	$dblink = new mysqli( "localhost", "webuser", "k29ro10_kUDajVZw", $db);
	return $dblink;
}
?>