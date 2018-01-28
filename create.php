<?php require_once ("layout/header.php"); ?>
<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
if (empty($name)) {
$msg_name = 'You must enter an name' ;
}elseif(empty($phone)) {
$msg_phone = 'You must enter an phone' ;
}elseif(empty($address)){
$msg_address = 'You must enter an address' ;
} else {
$stmt = $db->query("INSERT INTO address_book (name,phone,address)VALUES ('$name','$phone','$address')");
//redirect to index page
header('Location: index.php?action=added');
exit;
}
}
?>
<div class="container">
	<form method="post" action="create.php"class="form-horizontal form-bordered" enctype="multipart/form-data">

		<div class="form-group">
			<label for="exampleInputEmail1">Name</label>
			<input type="name" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
			<?php if (isset($name)){
				echo'<span class="help-block">
                <strong>You must enter an name</strong>
                </span>';
			}?>
        </div>

		<div class="form-group">
			<label for="exampleInputPassword1">Phone</label>
			<input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
			<?php if (isset($phone)){
				echo'<span class="help-block">
                <strong>You must enter an phone</strong>
                </span>';
            }?>
        </div>

		<div class="form-group">
			<label for="exampleInputPassword1">Address</label>
			<input type="address" name="address" class="form-control" id="Address" placeholder="Address" >
			<?php if (isset($address)){
				echo'<span class="help-block">
                <strong>You must enter an address</strong>
                </span>';
			}?>
        </div>

		<button  name="submit" type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php require_once ("layout/footer.php"); ?>
