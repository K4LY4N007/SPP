<?php
session_start();
require 'DBconnect.php';
if(isset($_SESSION["email"])){
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin · Marks Prediction</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="icon.jpg" />
</head>

<body>
    <?php include "header.php";?>
    <div class="container-fluid">
        <div class="row">
            <?php include "sidebar.php";?>
            <div class="col-md-9 ml-sm-auto col-lg-10 content">
                <main role="main">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                        <h1 class="h2">Dashboard</h1>
                    </div>
                    <?php
              $sql = "SELECT * FROM SPP.student_details";
              $result = $conn->query($sql);
              $rowcount=mysqli_num_rows($result);
              $row=$result->fetch_assoc();
              ?>
                    <div class="card-columns">
                        <div class="card">
                            <a href="view_details.php" class="btn d-block card-btn">
                                <div class="card-body">
                                    <h5 class="card-title">Total Students</h5>
                                    <p class="card-text"><?php echo $rowcount; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </main>

                <?php include "footer.php"?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
}else{
    echo "<script type='text/javascript'>alert('Access Denied!! please log in first')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>