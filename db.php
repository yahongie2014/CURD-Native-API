<?php
ob_start();
session_start();
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','form');
$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
date_default_timezone_set('Europe/London');
$ip = $_SERVER['REMOTE_ADDR'];
$ip_host = $_SERVER['HTTP_HOST'];
$proxy_headers = array(
	'HTTP_VIA',
	'HTTP_X_FORWARDED_FOR',
	'HTTP_FORWARDED_FOR',
	'HTTP_X_FORWARDED',
	'HTTP_FORWARDED',
	'HTTP_CLIENT_IP',
	'HTTP_FORWARDED_FOR_IP',
	'VIA',
	'X_FORWARDED_FOR',
	'FORWARDED_FOR',
	'X_FORWARDED',
	'FORWARDED',
	'CLIENT_IP',
	'FORWARDED_FOR_IP',
	'HTTP_PROXY_CONNECTION'
);
foreach($proxy_headers as $x){
	if (isset($_SERVER[$x])) die("You are using a proxy!");
}
?>