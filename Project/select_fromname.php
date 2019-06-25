<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selecting a user</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		
		if(isset($_POST["submit"])){
			$fromname=$_POST["fromname"];
			$_SESSION['fromname']=$fromname;
		}
		
		
	?>
	<form action="display_details.php" method="POST">
		<div class="container">
			<div class="row">
				
					<div class="col-md-4 col-md-offset-4">
						<label for="fromname">Name</label><br>
						<input class="form-control" type="textbox" name="fromname" placeholder="Enter name" ><br>
						<input class="btn btn-primary" type="submit" name="submit" value="Submit" >
					</div>
				
			</div>
		</div>
	</form>
	
</body>
</html>