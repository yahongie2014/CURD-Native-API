<?php
require_once ("db.php");
$characters = 'AHMEDSAEEDEGORPTOFDJFDSMCVXZJRTWUOIENCXNZKXJEOROQKSMDOQWEQROXMVZMC';
$name = strlen($characters);
$randomString = $characters[rand(0, $name - 1)];
$phone = rand(1000000,70000000);
$stmt = $db->query("INSERT INTO address_book (name,phone,address)VALUES ('$randomString','$phone','$randomString,Cairo,Egypt')");
header('Location: index.php?action=autoinsert');
?>