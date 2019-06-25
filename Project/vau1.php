<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Id, name, email, curr_credit FROM user";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Current Credit</th>
	</tr>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		        	echo "<tr>";
		        		echo "<td>".$row["Id"]."</td>";
		        		echo "<td>".$row["name"]."</td>";
		        		echo "<td>".$row["email"]."</td>";
		        		echo "<td>".$row["curr_credit"]."</td>";
		        	echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</table>
</div>
<center>
	<form action="index.php">
		<div>
			<input class="btn btn-primary" type="submit" name="goto" value="Go to Homepage">
		</div>
	</form>
</center>

</body>
</html>