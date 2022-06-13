<?php
require 'DBconnect.php';
$id_0=$_GET['id'];
$id_1=$_GET['id1'];
$id_2=$_GET['id2'];
$id_3=$_GET['id3'];
$id_4=$_GET['id4'];
$id_5=$_GET['id5'];
$id_6=$_GET['id6'];
$id_7=$_GET['id7'];
session_start();
if(isset($_SESSION["email"])){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin · Marks Prediction </title>

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
                        <h1 class="h2">Updation</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <form class="Updation-form" method="POST">
                                        <!-- <p class="card-description"> Personal info </p> -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">USN</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" value="<?php echo "$id_0" ?>" class="form-control" name="USN" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 1</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_1" ?>" class="form-control" name="Sem_1" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 2</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_2" ?>" class="form-control" name="Sem_2" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 3</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_3" ?>" class="form-control" name="Sem_3" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 4</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_4" ?>" class="form-control" name="Sem_4" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 5</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_5" ?>" class="form-control" name="Sem_5" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 6</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_6" ?>" class="form-control" name="Sem_6" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sem 7</label>
                                                    <div class="col-sm-9">
                                                    <input type="number" value="<?php echo "$id_7" ?>" class="form-control" name="Sem_7" placeholder="Percentage"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6 d-flex justify-content-end">
                                                <button type="reset" class="btn btn-info mr-2">Reset</button>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary mr-2">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
                <?php
              if(isset($_POST["submit"])) {
              $USN=$_POST['USN'];
              $Sem_1=$_POST['Sem_1'];
              $Sem_2=$_POST['Sem_2'];
              $Sem_3=$_POST['Sem_3'];
              $Sem_4=$_POST['Sem_4'];
              $Sem_5=$_POST['Sem_5'];
              $Sem_6=$_POST['Sem_6'];
              $Sem_7=$_POST['Sem_7'];
              $sql="UPDATE SPP.student_details SET USN='$USN', sem_1=$Sem_1, sem_2=$Sem_2, sem_3=$Sem_3, sem_4=$Sem_4, sem_5=$Sem_5, sem_6=$Sem_6, sem_7=$Sem_7 where USN='$USN'";
              $result=$conn->query($sql);
              if($result === TRUE){
                  echo "<script type='text/javascript'>alert('Updated Successfully')</script>";
              }
              else{
              echo "<script type='text/javascript'>alert('Error in updating the results')</script>";
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
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>