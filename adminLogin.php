<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ez Umbrella Admin</title>
	<link rel="stylesheet" type="text/css" href="css/adminLoginStyle.css?v=<?php echo time(); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<form action="adminLogin.php" method="POST"> 			
		<?php include('php/login.php'); ?>
		<h3><i class="fa-solid fa-user"></i>Adminstrator Login</h3>
		<hr>
    	<input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Email">
    	<input type="password" class="form-control" name="pwd" aria-describedby="pwd" placeholder="Password">
    	<div style="margin-bottom: .5rem;"></div>
    		<div class="d-grid gap-2 col-6 mx-auto">
  				<button type="submit" name="submit" class="btn btn-outline-light">Login</button>
  			</div>
  		</div>
	</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
