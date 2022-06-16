<?php
	session_start();
	$email  = "";
	// connect to the database
	include('connection.php');

	if(isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pwd = mysqli_real_escape_string($db, $_POST['pwd']); 

		// $hash = password_hash($pwd, PASSWORD_DEFAULT);

	    $query = "SELECT * FROM admin WHERE email='$email' AND password='$pwd'";
    	$results = mysqli_query($db, $query);
    	if (mysqli_num_rows($results) == 1) {
     		$_SESSION['email'] = $email;
      		$_SESSION['success'] = "You are now logged in";
      		header('location: logs.php');
    	} else {
			echo "Account not valid";
		}
	}
	
?>