<?php
session_start();
require 'DBconnect.php';
if(isset($_SESSION["usn"])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student · Marks Prediction </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/signIn.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.png" />
  </head>
  <body class="text-center">
    <div class="main-container d-flex w-100 h-50 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        
      </header>
      <main role="main">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                        <h1 class="h2">Change Password</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <form action="change_password_student.php" method="post">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row ">
                                                    <label class="col-sm-3 col-form-label">Old Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" name="old_password"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">New Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" name="new_password"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" name="confirm_password"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-end">
                                                <button type="submit" name="changepassword_submit"
                                                    class="btn btn-outline-primary mr-2">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
                <?php 
              $usn = $_SESSION["usn"];
              $sql = "select * from SPP.user_login where user_usn='$usn'";
              $result=$conn->query($sql); 
              $row=$result->fetch_assoc();
              $password=$row['user_password'];
              if(isset($_POST['changepassword_submit'])){
                $oldpassword = $_POST['old_password'];
                $newpassword = $_POST['new_password'];
                $confirm_password = $_POST['confirm_password'];

                if($newpassword == $confirm_password){
                  if(strcasecmp($oldpassword,$password)==0){
                      $sql1 = "UPDATE SPP.user_login SET user_password='$newpassword' WHERE user_usn='$usn'";
                      if ($conn->query($sql1) === TRUE) {
                        echo "<script type='text/javascript'>alert('password change successful !!');location.href = 'student_HomePage.php';</script>";
                      } else {
                        echo "<script type='text/javascript'>alert('password change Failed !!');location.href = 'student_HomePage.php';</script>";                      
                    }
                  }else{
                      echo "<script type='text/javascript'>alert('Password Incorrect!!!');location.href = 'student_HomePage.php';</script>";
                  }
                }else{
                  echo "<script type='text/javascript'>alert('Password Mismatched!!!');location.href = 'student_HomePage.php';</script>";
                }
              }
            ?> 
      <!-- <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Designed By <span class="text-light">Department Of Computer Science And Engineering</span>.</p>
        </div>
      </footer> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
    echo "<script type='text/javascript'>alert('Access Denied!! please log in first')</script>";
    echo "<meta http-equiv='refresh' content='0; url=student_login.php'>";
}
?>