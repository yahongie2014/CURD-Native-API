<?php
require_once ("db.php");
$stmt = $db->query('DELETE FROM address_book');
header('Location: index.php?action=Empty');
?>
