<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.box{
 			   width: 1050px;
    		   margin: 0 auto;
		}
	</style>
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
		$fromname=$_SESSION['fromname'];
		$toname=$_POST['toname'];
		$amount=$_SESSION['amount'];
		$sql="INSERT INTO transfer(from_name,to_name,amt) VALUES ('$fromname','$toname','$amount')";
		$result=mysqli_query($conn, $sql);
		$sql1="UPDATE user SET curr_credit=curr_credit-$amount WHERE name='$fromname'";
		$result=mysqli_query($conn,$sql1);	
		$sql1="UPDATE user SET curr_credit=curr_credit+$amount WHERE name='$toname'";
		$result=mysqli_query($conn,$sql1);
	?>
	<center>
	<form action="vau1.php">
		<div class="container">
			<input class="btn btn-primary" type="submit" name="view" value="View all Users!">
		</div>
	</form>
	</center>
</body>
</html>