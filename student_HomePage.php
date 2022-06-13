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
    <title>Student · Marks Prediction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <!-- Custom styles for this template -->
    <link href="css/contact.css" rel="stylesheet">
    <link rel="shortcut icon" href="icon.jpg" />
</head>
<body>
    <header class="sticky-top">
            <div class="nav_section">
                <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index.php">
                    <img src="KSSEM_Logo.png" alt="KSSEM" width="250" height="46">
                </a>
                    <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="text-white fa fa-bars" ></i>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="home_page.php">Home Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="change_password_student.php">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="student_login.php">Log Out</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
    </header>
  <body class="text-center">
    <div class="main" >
        <div class="container">
            <div class="main-container d-flex w-100 h-50 p-3 mx-auto flex-column">
            <main role="main">
                <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                <h1 class="h2">Details</h1>
                </div>
                                <?php
                                $sql = "select * from SPP.student_details where USN='".$_SESSION["usn"]."'";
                                $result = $conn->query($sql);
                                $row=$result->fetch_assoc();
                                            $usn=$row['USN'];
                                            $sem_1=$row['sem_1'];
                                            $sem_2=$row['sem_2'];
                                            $sem_3=$row['sem_3'];
                                            $sem_4=$row['sem_4'];
                                            $sem_5=$row['sem_5'];
                                            $sem_6=$row['sem_6'];
                                            $sem_7=$row['sem_7'];
                                            
                                        ?>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <form class="Updation-form" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">USN</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo "$usn" ?>" class="form-control" name="USN" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sem 1</label>
                                                <div class="col-sm-9">
                                                <input type="number" value="<?php echo "$sem_1" ?>" class="form-control" name="Sem_1" placeholder="Percentage"
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
                                                <input type="number" value="<?php echo "$sem_2" ?>" class="form-control" name="Sem_2" placeholder="Percentage"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sem 3</label>
                                                <div class="col-sm-9">
                                                <input type="number" value="<?php echo "$sem_3" ?>" class="form-control" name="Sem_3" placeholder="Percentage"
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
                                                <input type="number" value="<?php echo "$sem_4" ?>" class="form-control" name="Sem_4" placeholder="Percentage"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sem 5</label>
                                                <div class="col-sm-9">
                                                <input type="number" value="<?php echo "$sem_5" ?>" class="form-control" name="Sem_5" placeholder="Percentage"
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
                                                <input type="number" value="<?php echo "$sem_6" ?>" class="form-control" name="Sem_6" placeholder="Percentage"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Sem 7</label>
                                                <div class="col-sm-9">
                                                <input type="number" value="<?php echo "$sem_7" ?>" class="form-control" name="Sem_7" placeholder="Percentage"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button type="submit" name="submit"
                                                class="btn btn-outline-primary mr-2">Predict</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        </div>
        
      </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <footer class="mastfoot mt-auto">
        <div class="inner">
        <p style="font-size: 20px;">Designed By <span class="text-light">Department Of Computer Science And Engineering</span>.</p>
        </div>
    </footer>
</body>
</html>
<?php
}else{
    echo "<script type='text/javascript'>alert('Access Denied!! please log in first')</script>";
    echo "<meta http-equiv='refresh' content='0; url=student_login.php'>";
}
?>