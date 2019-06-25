<!DOCTYPE html>
<html>
<head>
	<title>Details of the user</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<?php
	session_start();
?>
	
	<?php
		$servername="localhost";
		$username="root";
		$pass="";
		$dbname="project";

		$conn=mysqli_connect($servername,$username,$pass,$dbname);

		if(!$conn){
			die("Connection failed: " . mysqli_connect_error);
		}

		$name=$_POST["fromname"];
	    $_SESSION['fromname']=$name;
		$sql = "SELECT * FROM user where name='$name'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	echo "<center><h1>Details</h1></center>";
		    	echo "<div class='container'>";
		        echo "<table class='table'>";
		          echo "<tr>";
		        		echo "<th>Id</th>";
		        		echo "<td>".$row["Id"]."</td>";
		        	echo "</tr>";
		        	echo "<tr>";
		        		echo "<th>Name</th>";
		        		echo "<td>".$row["name"]."</td>";
		        	echo "</tr>";
		        	echo "<tr>";
		        		echo "<th>E-mail</th>";
		        		echo "<td>".$row["email"]."</td>";
		        	echo "</tr>";
		        	echo "<tr>";
		        		echo "<th>Current Credit</th>";
		        		echo "<td>".$row["curr_credit"]."</td>";
		        	echo "</tr>";
		        echo "</table>";
		        echo "</div>";
		        $_SESSION['check_bal']=$row["curr_credit"];
		    }
		} else {
		    echo "<b>No results found</b>";
		}


		mysqli_close($conn);
	?>
	<center>
		<form action="transfer.php">
			<div class="container">
			<input class="btn btn-primary" type="submit" name="" value="Continue">
			</div>
		</form>
	</center>
</body>
</html>