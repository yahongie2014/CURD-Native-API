<?php
include_once ("db.php");
$stmt = $db->query('ALTER TABLE address_book AUTO_INCREMENT = 1');
header('Location: index.php?action=reset');
?>
