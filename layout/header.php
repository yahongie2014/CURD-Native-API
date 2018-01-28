<?php include_once ("db.php"); ?>
<html>
<head>
	<title>My Address Book</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CURD</a>
        </div>
        <a href="create.php"> <button class="btn btn-success navbar-btn">Create New Post</button></a>
        <a href="autoinsert.php"> <button class="btn btn-message navbar-btn">Auto Insert</button></a>
        <a href="alter.php"> <button class="btn btn-info navbar-btn">Reset Database</button></a>
        <a href="empty.php"> <button class="btn btn-danger navbar-btn">Empty Database</button></a>
        <a href="api.php/address_book" target="_blank"> <button class="btn btn-warning navbar-btn">Access Api</button></a>
    </div>

</nav>
