<?php
session_start();
require 'connection.php';
	$result=mysqli_query($db,"SELECT * FROM sales_product"); 
	/*$result = mysqli_query($db, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id ASC");*/
?>



<!DOCTYPE html>
<html>
	<title>Water</title>
<body>
	<a class="btn" href="../main.html">Home</a>
	<a class="btn" href="customer_record.php">Add</a>
		
			<h1>Sale Product Record</h1>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th>id</th>
      		<th>product</th>
      		<th>Quantity</th>
      		<th>Unit</th>
      		<th>Price</th>
            <th colspan='2'>Action</th>
      	</tr>
	       	<?php $i=1;
      		while($information=mysqli_fetch_array($result)){
      			echo "<tr>";?>
						<td><?php echo $information['id'] ?></td>
						<td><?php echo $information['product_id'] ?></td>
						<td><?php echo $information['quantity'] ?></td>
						<td><?php echo $information['unit'] ?></td>
						<td><?php echo $information['price'] ?></td>
						<td>
								<a href="delete_customer_record.php?delete_id=<?php echo $information['id_number']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="edit_customer_record.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      </table>
</body>
</html>