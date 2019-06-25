<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<?php
	$servername="localhost";
		$username="root";
		$pass="";
		$dbname="project";

		$conn=mysqli_connect($servername,$username,$pass,$dbname);

		if(!$conn){
			die("Connection failed: " . mysqli_connect_error);
		}
		if(isset($_POST["trans_amt"])){
			$amount=$_POST["amount"];
			$_SESSION['amount']=$amount;
		$name=$_POST["fromname"];
	    $_SESSION['fromname']=$name;
		$sql = "SELECT curr_credit FROM user where name='$name'";
		$result = mysqli_query($conn, $sql);
		echo "$result";
		if($amount>$result){
			echo "Not sufficient credits to transfer";
		}
	}

		
		
	?>
	<form action="select_toname.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<label>Enter Amount</label><br>
					<hr class="mb-3">
					<input class="form-control" type="textbox" name="amount" placeholder="Enter amount">
					<hr class="mb-3">
					<input  class="btn btn-primary" type="submit" name="trans_amt" value="Transfer">
				</div>
			</div>
		</div>
	</form>
</body>
</html>