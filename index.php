<?php
require 'DBconnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin Login In · Marks Prediction </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signIn.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.png" />
  </head>
  <body class="text-center">
    <div class="main-container d-flex w-100 h-100 pt-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        
        </header>
      <main role="main" class="inner main">
      <img class="mb-4" src="KSSEM_Logo.png" alt="Body Vignyan" width="640" height="117">
        <form class="form-signin" method="POST">
          <h1 class="h3 mb-3 font-weight-normal">Please Login in</h1>


          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required></br>

          <!-- <div class="text-left">
            <a href="forgot_password.php" >Forgot Password</a>
          </div> -->

          <button class="btn btn-lg btn-secondary btn-block mt-2" name="signin" type="submit">Sign in</button>
          <p>Not an Admin ? &nbsp;<span ><a href="home_page.php" class="link">Back to home page</a></span> </p>
        </form>
      </main>
      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $email=$_POST['email'];
          $password=$_POST['password'];
            $sql="select * from SPP.admin where email='$email'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $admin_password=$row['Password'];
            if(strcasecmp($admin_password,$password)==0){
              echo "<script type='text/javascript'>alert('Admin Login Successful')</script>";
              session_start();
              $_SESSION["email"] = $row['email'];
              header('location:dashboard.php');
            }else{ 
              echo "<script type='text/javascript'>alert('Admin Failed to Login! Incorrect RollNo or Password')</script>";
              echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            }
          }
      ?>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Designed By <span class="text-light">Department Of Computer Science And Engineering</span>.</p>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
