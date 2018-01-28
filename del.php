<?php
include_once ("db.php");
$id =$_REQUEST['id'];
$db->query("DELETE FROM address_book WHERE id = '$id'");
header('Location: index.php?action=delete?id='."[$id]".'');
?>
