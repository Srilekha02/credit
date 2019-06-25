<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<?php
			$amount=$_POST["amount"];
			$_SESSION['amount']=$amount;
		
		
	?>
	<form action="insert.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<label>Select User</label><br>
					<hr class="mb-3">
					<input class="form-control" type="text" name="toname" placeholder="Enter name">
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="select" value="Select">
				</div>
			</div>
		</div>
	</form>
</body>
</html>