<?php require("layout/header.php"); ?>
<div class="container">
<div class="row">
<div class="col-sm-12">
<table id="example" class="display" width="100%" cellspacing="0">
			<thead>
			<tr>
				<th>#ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
            <tbody>
            <?php
			$stmt = $db->query('SELECT id, name, phone, address FROM address_book ORDER BY id ASC');
			while($row = $stmt->fetch()){
				echo '<tr>';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['name'].'</td>';
				echo '<td>'.$row['phone'].'</td>';
				echo '<td>'.$row['address'].'</td>';
				echo '<td><a class="Edit" href="edit.php?id='.$row['id'].'"> <i class="fa fa-edit"></i> </a></td>';
				echo '<td><a onclick="return confirm(\'Are you sure you want to delete this  '.$row['name'].' ?\');" class="Delete" href="del.php?id='.$row['id'].'"> <i class="fa fa-trash"></i> </a></td>';
				echo '</tr>';
			}
			?>
            </tbody>
		</table>
</div>
</div>
</div>
<?php require ("layout/footer.php"); ?>
