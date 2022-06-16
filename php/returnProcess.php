<?php 
	include('connection.php');
	
	if(isset($_POST['return'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);

		$query = "SELECT * FROM rent WHERE email='$email'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			echo "Returned" , "<p>Go back to <a href=\"../rent.php\">rent</a></p>";
			// query if the user has a rental
			$getUser  = "SELECT * FROM rent WHERE email = '$email' LIMIT 1";
			$result = mysqli_query($db, $getUser);
			while($row = mysqli_fetch_assoc($result)) {
    			// get values user data	
    			$fName = $row['fName'];
    			$lName = $row['fName'];
    			$timeRent = $row['timeRent'];

    			// add a log of the rental to logs table
				$sql = "INSERT INTO logs (email, fName, lName, timeRent)
						VALUES ('$email', '$fName', '$lName', '$timeRent');";
				$query = mysqli_query($db, $sql);

				// delete user row from the active rent table
				$sql = "DELETE FROM rent WHERE email='$email';";
				$query = mysqli_query($db, $sql);
			}
		} else {
			echo "No umbrella to return" , "<p>Go back to <a href=\"../rent.php\">rent</a></p>";
		}
	}
 ?>