<?php
ob_start();
session_start();
define('DBHOST','sql2.freemysqlhosting.net');
define('DBUSER','sql2218325');
define('DBPASS','uR9*jA7*');
define('DBNAME','sql2218325');
$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//date_default_timezone_set('Europe/London');
?>