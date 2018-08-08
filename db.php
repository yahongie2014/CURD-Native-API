<?php
ob_start();
session_start();
define('DBHOST','ec2-54-221-210-97.compute-1.amazonaws.com');
define('DBUSER','oiptzecwhwkyrw');
define('DBPASS','d72897b513637ac17aad064d9e5e4666bbbff209b100ee349ea934310ccc2ac4');
define('DBNAME','d349qg1v184rmd');
$db = new PDO("pgsql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//date_default_timezone_set('Europe/London');
?>
