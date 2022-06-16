<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ez Umbrella</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		form {
			height: 230px;
		}
	</style>
</head>
<body>

<!-- particles.js container -->
<div id="particles-js">
		<form action="php/returnProcess.php" method="POST">
			<div class="content">	
				<h3><i class="fa-solid fa-user"></i>Return Umbrella</h3>
				<hr>
    			<input type="email" class="form-control" name="email" id="phone" aria-describedby="email" placeholder="Email" required>
    			<div style="margin-bottom: .5rem;"></div>
    			<div class="d-grid gap-2 col-6 mx-auto">
  					<button type="submit" name="return" class="btn btn-outline-light" action="php/returnProcess.php" method="POST">Return</button>
  				</div>
  				<p id="return">Need to <a href="rent.php" >rent</a> | Are you an <a href="adminLogin.php" >admin?</a></p>
  			</div>
		</form>
	</div>		
</div> 

<!-- count particles -->
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
