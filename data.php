<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'test';

$connection = @mysql_connect($mysql_host, $mysql_user, $mysql_pass);

if (!$connection) {
	die('hata! ' . mysql_error());
}

@mysql_select_db($mysql_db);
@mysql_set_charset('UTF8');
//
?>