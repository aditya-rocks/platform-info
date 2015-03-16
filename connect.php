<?php
$host = 'localhost';
$user = 'root';
$password = 'w202scorpio';
$db = 'platform';
$error = 'could not connect';
if(!mysql_connect($host,$user,$password) || !mysql_select_db($db)){
		echo $error;
	}

?>