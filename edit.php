<?php require_once ("layout/header.php"); ?>
<?php
$id =$_REQUEST['id'];
$result =  $db->query('SELECT id, name, phone, address FROM address_book WHERE id = '.$id.'.');
$records = $result->fetch();
if (!$result){die("Error: Data not found..");}
if(isset($_POST['update'])) {
$id_s    = $_POST['id'];
$name    = $_POST['name'];
$phone   = $_POST['phone'];
$address = $_POST['address'];
if (empty($name)) {
$msg_name = 'You must enter an name' ;
}elseif(empty($phone)) {
$msg_phone = 'You must enter an phone' ;
}elseif(empty($address)){
$msg_address = 'You must enter an address' ;
} else {
$update_record = $db->query( "UPDATE address_book SET `name` = '$name' ,`phone` = '$phone' , `address` = '$address' WHERE `id` = '$id'" );
header( 'Location: index.php?action=edit' );
}
}
?>
<div class="container">
	<form method="post" action="edit.php"class="form-horizontal form-bordered" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $records['id']; ?>"/>
		<div class="form-group">
			<label for="exampleInputEmail1">Name</label>
			<input name="name" class="form-control"  value="<?php echo $records['name'] ?>" id="name" aria-describedby="name" placeholder="Enter Name">
			<?php if (isset($name)){
				echo'<span class="help-block">
                <strong>You must enter an name</strong>
                </span>';
			}?>
        </div>

		<div class="form-group">
			<label for="exampleInputPassword1">Phone</label>
			<input  name="phone" class="form-control"  value="<?php echo $records['phone']  ?>" id="phone" placeholder="Phone">
			<?php if (isset($phone)){
				echo'<span class="help-block">
                <strong>You must enter an phone</strong>
                </span>';
			}?>
        </div>

		<div class="form-group">
			<label for="exampleInputPassword1">Address</label>
			<input  name="address" class="form-control"  value="<?php echo $records['address']  ?>" id="Address" placeholder="Address" >
			<?php if (isset($address)){
				echo'<span class="help-block">
                <strong>You must enter an address</strong>
                </span>';
			}?>
        </div>

		<button  name="update" type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
<?php require_once ("layout/footer.php"); ?>
