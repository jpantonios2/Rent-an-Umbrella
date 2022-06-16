<?php
	
	include('connection.php');
	// connect to the database
	$error = "";
	if(isset($_POST['submit'])) {
		$fName = mysqli_real_escape_string($db, $_POST['fname']);
		$lName = mysqli_real_escape_string($db, $_POST['lname']); 
		$email = mysqli_real_escape_string($db, $_POST['email']);

		// check if the user is already renting
		$getUsers  = "SELECT * FROM rent;";
		$result = mysqli_query($db, $getUsers);

		while($row = mysqli_fetch_assoc($result)) {
			if($email == $row['email']) {
				$error = "You are already renting!";
				echo $error , "<p>Go back to <a href=\"../rent.php\">rent</a></p>";
			}
		}

		if($error == "") {
			$sql = "INSERT INTO rent (email, fName, lName)
				VALUES ('$email', '$fName', '$lName');";
			$query = mysqli_query($db, $sql);
			header("location: ../rent.php?rent=success");
		}
	}
?>