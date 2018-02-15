<?php
ob_start();
session_start();
define('DBHOST','sql302.epizy.com');
define('DBUSER','epiz_21615192');
define('DBPASS','Seri2020');
define('DBNAME','epiz_21615192_db');
$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//date_default_timezone_set('Europe/London');
?>
