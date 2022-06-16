<?php include('php/connection.php') ?>
<?php 
   session_start();
   if (!isset($_SESSION['email'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: adminLogin.php');
   }
   if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['email']);
      header("location: rent.php");
   }
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Ez Umbrella Admin</title>
      <link rel="stylesheet" type="text/css" href="css/dashboardStyle.css?v=<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="content">
      <nav class="navbar navbar-expand-lg">
         <div class="container-fluid">
         <a class="navbar-brand" href="#">Administrator Panel</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="logs.php">Logs</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="rentLogs.php">Rented</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="?logout='1">Sign out</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container">
      <table>
         <tr>
         <th>Email</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Date Rented</th>
         <th>Date Returned</th>
         </tr>
         <?php 
            $getUsers  = "SELECT * FROM logs;";
            $result = mysqli_query($db, $getUsers);
            while($row = mysqli_fetch_assoc($result)) {
               $phpdateStart = strtotime( $row['timeRent'] );
               $mysqldateStart = date( 'Y-m-d H:i:s', $phpdateStart );
               $phpdateEnd = strtotime( $row['timeRent'] );
               $mysqldateEnd = date( 'Y-m-d H:i:s', $phpdateEnd );
         	  echo "
         		    <tr>
         			   <td>" , $row['email']  ,"</td>
         			   <td>" , $row['fName'] ,"</td>
         			   <td>" , $row['lName'] ,"</td>
         			   <td>" , $mysqldateStart ,"</td>
                     <td>" , $mysqldateEnd ,"</td>
         		    </tr>
         		";
            }
         ?>
      </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   </body>
</html>