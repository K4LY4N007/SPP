<?php
require 'DBconnect.php';
session_start();
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
            <?php
                $sql="select * from SPP.student_details";
                $result=$conn->query($sql);
                $rowcount=mysqli_num_rows($result);
                ?>
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                                    <h1 class="h2">Students</h1>
                                </div>
                            <?php
                                if($rowcount<1)
                                    echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                else
                                {
                                    $count=1;
                            ?>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                    <th scope="col">Sl_no</th>
                                    <th scope="col">USN</th>
                                    <th scope="col">Sem_1</th>
                                    <th scope="col">Sem_2</th>
                                    <th scope="col">Sem_3</th>
                                    <th scope="col">Sem_4</th>
                                    <th scope="col">Sem_5</th>
                                    <th scope="col">Sem_6</th>
                                    <th scope="col">Sem_7</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row=$result->fetch_assoc())
                                        {
                                            $USN=$row['USN'];
                                            $Sem_1=$row['sem_1'];
                                            $Sem_2=$row['sem_2'];
                                            $Sem_3=$row['sem_3'];
                                            $Sem_4=$row['sem_4'];
                                            $Sem_5=$row['sem_5'];
                                            $Sem_6=$row['sem_6'];
                                            $Sem_7=$row['sem_7'];
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count ?></th>
                                            <td><?php echo $USN ?></td>
                                            <td><?php echo $Sem_1 ?></td>
                                            <td><?php echo $Sem_2 ?></td>
                                            <td><?php echo $Sem_3 ?></td>
                                            <td><?php echo $Sem_4 ?></td>
                                            <td><?php echo $Sem_5 ?></td>
                                            <td><?php echo $Sem_6 ?></td>
                                            <td><?php echo $Sem_7 ?></td>
                                            <td><a href="delete_student.php?id=<?php echo $USN ?>" type="button" class="btn btn-danger">Delete</a></td>
                                            <td><a href="update.php?id=<?php echo $USN ?>&id1=<?php echo $Sem_1 ?>&id2=<?php echo $Sem_2 ?>&id3=<?php echo $Sem_3 ?>&id4=<?php echo $Sem_4 ?>&id5=<?php echo $Sem_5 ?>&id6=<?php echo $Sem_6 ?>&id7=<?php echo $Sem_7 ?>" type="button" class="btn btn-info">Edit</a></td>
                                            <!-- <td><a type="button" class="btn btn-primary">Predict</a></td> -->
                                        </tr>
                                        <?php
                                            $count++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                                }
                            ?>
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