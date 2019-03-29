<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM sales");
?>
<!-- $records=mysqli_query($con,"SELECT * FROM service_record,service,employee  WHERE service_record.servicecode = service.servicecode and employee.id_number = service_record.id_number"); -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>water purified refilling station</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			background-size: cover;
			color: black;
			width: 100%;
		}
	</style>
</head>
<body>
		<div class="container">
					<nav class="navbar navbar-expand-lg navbar-success bg-gray">
						<img src="img/water.png" width="120" height="100" alt="img/water.png"/>&nbsp;&nbsp;&nbsp;
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="water sales.php"><h3>My Water purified refilling station </h3><span class="sr-only">(current)</span></a>
									</li>
								</ul>
								<form class="form-inline my-2 my-lg-0">		
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												profile
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												
												<a class="dropdown-item" href="index.php">Home</a>
											</div>
										</li>			
									</ul>
								</form>
							</div>
					</nav>
		</div>
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">	
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Viewing sales</li>
				</ol>
			</div>
		</nav>
	</div>
<br/><br/>
	<div class="container">
		<table class="table">
			<tr bgcolor='teal'>
			<td>sales_id</td>
			<td>customer_name</td>
			<td>Date</td>
			<td>action</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['customer_id']."</td>";
			echo "<td>".$res['Date']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this products?')\">Delete</a></td>";		
		}
		?>

</table>
<br/>
<a class="btn btn-sm btn-outline-info" href="addsales.php">Sales</a>
<a class="btn btn-sm btn-outline-info" href="rename.php">Order</a>
</div>
		<br/><br/>
	
</body>
</html>